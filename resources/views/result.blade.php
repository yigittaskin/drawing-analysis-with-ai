@extends('layouts.app')

@section('title', 'Analysis Result')

@section('content')
    <div class="mt-5 text-center mx-auto" style="max-width: 600px;">
        <h1>Analysis of Your Drawing</h1>
        <div class="mt-4">
            <img src="{{ asset('storage/' . $imagePath) }}" alt="Uploaded Drawing" class="img-fluid" style="max-width: 400px;">
        </div>
        <h2 class="mt-4">AI Analysis:</h2>
        <p>{{ $analysis }}</p>

        <a href="{{ route('upload') }}" class="btn btn-primary mt-3">Analyze another drawing</a>
    </div>
@endsection
