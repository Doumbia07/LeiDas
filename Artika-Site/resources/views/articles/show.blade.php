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
    <a href="mailto:{{ $article->user->email }}">Contactez l'artisan</a>
</div>
@endsection
