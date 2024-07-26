@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->description }}</p>

    <h3>Images</h3>
    <div class="row">
        @foreach($article->images as $image)
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $article->title }}" class="img-fluid">
            </div>
        @endforeach
    </div>

    @if($article->user)
        <a href="mailto:{{ $article->user->email }}" class="btn btn-primary mt-4">Contactez l'artisan</a>
    @else
        <p>Artisan non disponible pour le contact.</p>
    @endif

    <a href="{{ route('articles.index') }}" class="btn btn-secondary mt-4">Retour à la liste</a>
</div>
@endsection
