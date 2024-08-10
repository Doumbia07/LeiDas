@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex flex-column align-items-center" style="background-color: #111111e1; padding: 20px;">
    <h1 class="text-center mb-4" style="font-size: 2.5rem; color: #f4efeff0;">Liste des articles</h1>

    <div class="mb-5 w-100 d-flex justify-content-center">
        <form action="{{ route('articles.index') }}" method="GET" class="d-flex w-100" style="max-width: 600px;">
            <input type="text" name="search" class="form-control me-2" placeholder="Rechercher un article" style="border-radius: 30px 0 0 30px; box-shadow: none; border-right: none;">
            <button type="submit" class="btn btn-primary" style="border-radius: 0 30px 30px 0; padding: 0 20px; background-color: #007bff; border: none;">
                Rechercher
            </button>
        </form>
    </div>

    <div class="row w-100" style="max-width: 1200px;">
        @foreach($articles as $article)
            <div class="col-md-3 col-sm-6 mb-4 d-flex align-items-stretch">
                <div class="card h-100 shadow-sm" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s; max-width: 250px; margin: auto; display: flex; flex-direction: column;">
                    @if ($article->images->isNotEmpty())
                        @php
                            $imagePath = 'storage/' . $article->images->first()->path;
                        @endphp
                        <img src="{{ asset($imagePath) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 150px; object-fit: cover;">
                    @else
                        <div class="card-img-top d-flex align-items-center justify-content-center bg-light" style="height: 150px;">
                            <span class="text-muted">Pas d'image</span>
                        </div>
                    @endif
                    <div class="card-body d-flex flex-column justify-content-between" style="flex: 1;">
                        <div>
                            <h5 class="card-title" style="color: #007bff; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $article->title }}</h5>
                            <p class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ Str::limit($article->description, 50) }}</p>
                        </div>
                        <div class="mt-3">
                            <p class="card-text"><strong>Ville:</strong> {{ $article->city }}</p>
                            <p class="card-text"><strong>Métier:</strong> {{ $article->job }}</p>
                            <p class="card-text"><strong>Téléphone:</strong> {{ $article->phone }}</p>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-primary btn-block" style="width: 100%;">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Effet de survol pour les images des cartes
        const images = document.querySelectorAll('.card-img-top');
        images.forEach(img => {
            img.addEventListener('mouseover', function() {
                img.style.transform = 'scale(1.05)';
            });
            img.addEventListener('mouseout', function() {
                img.style.transform = 'scale(1)';
            });
        });

        // Effet de survol pour les cartes sans image
        const noImageDivs = document.querySelectorAll('.card-img-top.bg-light');
        noImageDivs.forEach(div => {
            div.addEventListener('mouseover', function() {
                div.style.backgroundColor = '#f0f0f0';
            });
            div.addEventListener('mouseout', function() {
                div.style.backgroundColor = '';
            });
        });
    });
</script>
@endsection
