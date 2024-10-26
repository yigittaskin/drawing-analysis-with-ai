@extends('layouts.app')

@section('title', 'Upload Your Drawing')

@section('content')
    <div class="mt-5 mx-auto" style="max-width: 600px;">
        <h1 class="text-center">Upload Your Drawing</h1>
        <form action="{{ route('analyze') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf

             <!-- Dil seçimi için selectbox -->
             <div class="mb-3">
                <label for="language" class="form-label">Select Analysis Language</label>
                <select class="form-control" id="language" name="language">
                    <option value="tr">Turkish</option>
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                    <option value="it">Italian</option>
                    <option value="pt">Portuguese</option>
                    <option value="ru">Russian</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="drawing" class="form-label">Choose a drawing to analyze:</label>
                <input type="file" class="form-control" id="drawing" name="drawing" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Analyze</button>
            </div>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <strong>Error!</strong> Please check your file.
            </div>
        @endif
    </div>
@endsection
