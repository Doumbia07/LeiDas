@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Liste des articles</h1>

    <div class="mb-6">
        <form action="{{ route('articles.index') }}" method="GET" class="flex justify-center">
            <input type="text" name="search" class="w-full max-w-lg border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 focus:ring-blue-500" placeholder="Rechercher un article">
            <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Rechercher</button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $article)
            <div class="bg-white p-6 rounded-lg shadow-md">
                @if ($article->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $article->images->first()->path) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover rounded-t-lg mb-4">
                @else
                    <div class="w-full h-48 bg-gray-200 rounded-t-lg mb-4 flex items-center justify-center">
                        <span class="text-gray-500">Pas d'image</span>
                    </div>
                @endif
                <h5 class="text-xl font-bold mb-2">{{ $article->title }}</h5>
                <p class="text-gray-700">{{ Str::limit($article->description, 100) }}</p>
                <a href="{{ route('articles.show', $article->id) }}" class="inline-block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voir plus</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
