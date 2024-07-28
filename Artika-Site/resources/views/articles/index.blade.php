@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Liste des articles</h1>

    <div class="mb-5">
        <form action="{{ route('articles.index') }}" method="GET" class="d-flex justify-content-center">
            <input type="text" name="search" class="form-control me-2" placeholder="Rechercher un article" style="max-width: 400px;">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>

    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if ($article->images->isNotEmpty())
                        @php
                            $imagePath = 'storage/' . $article->images->first()->path;
                        @endphp
                        <img src="{{ asset($imagePath) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="card-img-top d-flex align-items-center justify-content-center bg-light" style="height: 200px;">
                            <span class="text-muted">Pas d'image</span>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->description, 100) }}</p>
                        <p class="card-text"><strong>Ville:</strong> {{ $article->city }}</p>
                        <p class="card-text"><strong>Métier:</strong> {{ $article->job }}</p>
                        <p class="card-text"><strong>Téléphone:</strong> {{ $article->phone }}</p>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
