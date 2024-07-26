
@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Contactez un Artisan</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="artisan_id" class="block text-sm font-medium text-gray-700">Artisan</label>
            <select name="artisan_id" id="artisan_id" class="mt-1 block w-full">
                @foreach ($artisans as $artisan)
                    <option value="{{ $artisan->id }}">{{ $artisan->name }}</option>
                @endforeach
            </select>
            @error('artisan_id')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Votre nom & prénom</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full" value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Votre contacts</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full" value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Votre email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full" value="{{ old('email') }}">
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea name="message" id="message" rows="4" class="mt-1 block w-full">{{ old('message') }}</textarea>
            @error('message')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
    </form>
</div>
@endsection

