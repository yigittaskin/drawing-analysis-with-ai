<?php

namespace App\Http\Controllers;

use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DrawingController extends Controller
{
    // Landing sayfası
    public function landing()
    {
        return view('landing');
    }

    // Çizim yükleme sayfası
    public function index()
    {
        return view('upload');
    }

    // OpenAI API ile çizim analizi
    public function analyze(Request $request)
    {
        $request->validate([
            'drawing' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Seçilen dili al
        $selectedLanguage = $request->input('language');

        // Resmi kaydet
        $image = $request->file('drawing');
        $imagePath = $image->store('uploads', 'public');

        // Google Vision API ile resmi analiz et
        $imageAnnotator = new ImageAnnotatorClient();
        $imageContent = file_get_contents(storage_path('app/public/' . $imagePath));
        $response = $imageAnnotator->labelDetection($imageContent);
        $labels = $response->getLabelAnnotations();

        $descriptions = [];
        foreach ($labels as $label) {
            $descriptions[] = $label->getDescription();
        }

        // OpenAI API'ye etiketleri ve dili gönder ve analiz et
        $openAiResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => 'Analyze the following image description and provide insights about the person who might have drawn this: ' . implode(', ', $descriptions) . '. Provide the analysis in ' . $this->getLanguageName($selectedLanguage) . '.'
                ]
            ],
            'max_tokens' => 300,
        ]);

        $analysis = $openAiResponse->json('choices')[0]['message']['content'] ?? 'No analysis available.';

        return view('result', [
            'imagePath' => $imagePath,
            'analysis' => $analysis
        ]);
    }

    private function getLanguageName($code)
    {
        $languages = [
            'en' => 'English',
            'es' => 'Spanish',
            'fr' => 'French',
            'de' => 'German',
            'it' => 'Italian',
            'pt' => 'Portuguese',
            'ru' => 'Russian',
            'zh' => 'Chinese',
            'ja' => 'Japanese',
            'ar' => 'Arabic',
            'tr' => 'Turkish',
        ];

        return $languages[$code] ?? 'English';
    }
}
