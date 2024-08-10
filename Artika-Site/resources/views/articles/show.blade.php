@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-center text-primary mb-4">{{ $article->title }}</h1>
            <p class="card-text text-secondary">{{ $article->description }}</p>

            <div class="mt-4">
                <h4>Informations sur l'artisan</h4>
                <ul class="list-unstyled">
                    <li><strong>Ville:</strong> {{ $article->city }}</li>
                    <li><strong>Métier:</strong> {{ $article->craft }}</li>
                    <li><strong>Numéro de téléphone:</strong> <a href="tel:{{ $article->phone }}">{{ $article->phone }}</a></li>
                </ul>
            </div>

            <h3 class="mt-5 mb-4 text-center text-dark">Images</h3>
            <div class="row gx-3 gy-4">
                @foreach($article->images as $image)
                    <div class="col-md-4">
                        <div class="card">
                            <a href="{{ asset('storage/' . $image->path) }}" data-lightbox="article-images">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $article->title }}" class="card-img-top img-fluid rounded" style="width: 100%; height: 200px; object-fit: cover;">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($article->user)
                <div class="text-center mt-5">
                    <a href="mailto:{{ $article->user->email }}" class="btn btn-primary btn-lg">
                        Contactez l'artisan
                    </a>
                </div>
            @else
                <p class="text-center text-muted mt-5">Artisan non disponible pour le contact.</p>
            @endif

            <div class="text-center mt-4">
                <a href="{{ route('articles.index') }}" class="btn btn-secondary btn-lg">
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox pour l'affichage des images -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection
