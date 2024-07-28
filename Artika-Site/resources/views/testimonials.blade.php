@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Témoignages</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($testimonials as $testimonial)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h5 class="text-xl font-bold mb-2">{{ $testimonial->author }}</h5>
                <p class="text-gray-700">{{ $testimonial->content }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
