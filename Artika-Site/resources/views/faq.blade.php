<!-- resources/views/faq.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Questions Fréquemment Posées (FAQ)</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Comment publier un article ?</h2>
        <p class="text-gray-700">
            Pour publier un article, vous devez d'abord vous connecter à votre compte. Ensuite, cliquez sur "Publier un nouvel article" dans le menu. Remplissez le formulaire avec les détails de votre article et ajoutez des images si nécessaire. Cliquez ensuite sur "Publier" pour soumettre votre article.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <h2 class="text-xl font-semibold mb-4">Comment contacter un artisan ?</h2>
        <p class="text-gray-700">
            Vous pouvez contacter un artisan directement depuis la page de détails de son article. Il y a un lien mailto qui ouvre votre client de messagerie par défaut avec l'adresse email de l'artisan pré-remplie.
        </p>
    </div>

    <!-- Ajoutez plus de questions et réponses ici -->

</div>
@endsection
