<!-- resources/views/services.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Nos Services</h1>
    <p class="text-lg text-gray-700 mb-6 text-center">
        Nous proposons une variété de services pour répondre à vos besoins. Découvrez ci-dessous les différents services que vous pouvez trouver sur notre plateforme.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Service 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Service de Rénovation</h2>
            <p class="text-gray-700">
                Nos artisans spécialisés en rénovation peuvent transformer votre espace selon vos besoins. Que ce soit pour une rénovation complète ou des améliorations spécifiques, nous avons les experts qu'il vous faut.
            </p>
        </div>

        <!-- Service 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Service de Construction</h2>
            <p class="text-gray-700">
                Nous offrons des services de construction pour tout type de projet, qu'il s'agisse de constructions neuves ou de travaux de construction supplémentaires sur des structures existantes.
            </p>
        </div>

        <!-- Service 3 -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-2">Service de Design d'Intérieur</h2>
            <p class="text-gray-700">
                Nos designers d'intérieur vous aideront à créer des espaces fonctionnels et esthétiques qui correspondent à vos goûts et à vos besoins.
            </p>
        </div>

        <!-- Ajoutez d'autres services selon vos besoins -->
    </div>
</div>
@endsection
