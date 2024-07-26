@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Publier un nouvel article</h1>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="images">Images</label>
            <input type="file" name="images[]" class="form-control" id="images" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Publier</button>
    </form>
</div>
@endsection
