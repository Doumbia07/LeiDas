@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des articles</h1>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->description, 100) }}</p>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
