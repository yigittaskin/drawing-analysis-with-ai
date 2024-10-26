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
                    'content' => 'Öncelikle bana '. $this->getLanguageName($selectedLanguage) . ' cevap ver. Sen bir çizilen resmin analizini yapacaksın. Sana açıklamasını verdiğim bu çizimi analiz et ve çizimi yapan kişinin duygusal ve psikolojik özellikleri hakkında detaylı bir yorum sun. Çizimle ilgili açıklamadaki kelimeleri doğrudan bahsetmekten kaçın; bunun yerine, bu kelimelerin işaret ettiği temaları veya görsel unsurları psikolojik açıdan değerlendir. Çizimin genel havasını ve içeriğini ele alarak, bu kişinin sanatsal ve duygusal karakteristik özelliklerini değerlendir. Analizi ' . $this->getLanguageName($selectedLanguage) . ' dilinde yap ve bana cevabı ' . $this->getLanguageName($selectedLanguage) . 'olarak ver. Çizim hakkında kapsamlı bir psikolojik analiz sun. Açıklama: ' . implode(', ', $descriptions) . '.'
                ]
            ],
            'max_tokens' => 500,
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
            'en' => 'İngilizce',
            'es' => 'İspanyolca',
            'fr' => 'Fransızca',
            'de' => 'Almanca',
            'it' => 'İtalyanca',
            'pt' => 'Portekizce',
            'ru' => 'Rusça',
            'tr' => 'Türkçe',
        ];

        return $languages[$code] ?? 'English';
    }
}
