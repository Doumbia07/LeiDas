@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-center text-primary mb-4">{{ $article->title }}</h1>
            <p class="card-text text-secondary">{{ $article->description }}</p>

            <h3 class="mt-5 mb-4 text-center text-dark">Images</h3>
            <div class="row">
                @foreach($article->images as $image)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $article->title }}" class="card-img-top img-fluid rounded">
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
@endsection
