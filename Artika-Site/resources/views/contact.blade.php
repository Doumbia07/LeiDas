@extends('layouts.app')

@section('content')
<div class="container py-5" style="background-color: #1b0356;">
    <div class="card mx-auto shadow" style="max-width: 600px; border-radius: 10px;">
        <div class="card-body p-5">
            <h1 class="text-center mb-5">Contactez un Artisan</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="artisan_id" class="form-label">Artisan</label>
                    <select name="artisan_id" id="artisan_id" class="form-control">
                        @foreach ($artisans as $artisan)
                            <option value="{{ $artisan->id }}">{{ $artisan->name }}</option>
                        @endforeach
                    </select>
                    @error('artisan_id')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Votre nom & prénom</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="contact" class="form-label">Votre contacts</label>
                    <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') }}">
                    @error('contact')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Votre email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" id="message" rows="4" class="form-control">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
            </form>
        </div>
    </div>
</div>
@endsection
