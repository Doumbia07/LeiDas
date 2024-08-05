<!-- resources/views/faq.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Questions Fréquemment Posées (FAQ)</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Comment publier un article ?</h2>
        <p class="text-gray-700">
            Pour publier un article, vous devez d'abord vous connecter à votre compte. Ensuite, cliquez sur "Publier un nouvel article" dans le menu. Remplissez le formulaire avec les détails de votre article, ajoutez une description et une image si nécessaire. Une fois que vous avez vérifié toutes les informations, cliquez sur "Publier" pour soumettre votre article et le rendre visible à tous les visiteurs du site.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <h2 class="text-xl font-semibold mb-4">Comment contacter un artisan ?</h2>
        <p class="text-gray-700">
            Vous pouvez contacter un artisan directement depuis la page de détails de son article. Chaque article affiche les coordonnées de l'artisan, incluant un lien mailto qui ouvre votre client de messagerie par défaut avec l'adresse email de l'artisan pré-remplie. Vous pouvez également utiliser notre formulaire de contact pour envoyer un message direct à l'artisan.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <h2 class="text-xl font-semibold mb-4">Comment trouver les artisans ?</h2>
        <p class="text-gray-700">
            Pour trouver des artisans, accédez à la page "Artisans" sur notre site. Vous y trouverez une liste des artisans inscrits avec des informations détaillées sur chacun d'eux, y compris leurs coordonnées et les articles qu'ils ont publiés. Utilisez la barre de recherche ou les filtres pour affiner vos résultats en fonction de vos besoins spécifiques.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <h2 class="text-xl font-semibold mb-4">Quels services sont proposés par Artika Online ?</h2>
        <p class="text-gray-700">
            Artika Online propose une variété de services pour les artisans et les clients. Les artisans peuvent publier leurs articles, créer un profil personnalisé, et bénéficier de la visibilité accrue grâce à notre plateforme. Les clients peuvent rechercher des artisans, consulter leurs articles, et entrer en contact directement avec eux. Nous offrons également des fonctionnalités de gestion des publications et des outils de communication pour faciliter les interactions.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <h2 class="text-xl font-semibold mb-4">Comment utiliser les fonctionnalités de recherche ?</h2>
        <p class="text-gray-700">
            Notre site dispose d'une fonctionnalité de recherche avancée pour vous aider à trouver facilement les articles et les artisans que vous recherchez. Vous pouvez filtrer les résultats par catégorie, mot-clé, ou localisation. Utilisez la barre de recherche en haut de la page pour entrer vos critères et explorer les résultats.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <h2 class="text-xl font-semibold mb-4">Comment gérer mon profil d'artisan ?</h2>
        <p class="text-gray-700">
            Une fois connecté, vous pouvez accéder à votre profil depuis le menu principal. Vous pouvez mettre à jour vos informations personnelles, ajouter des articles, et gérer vos publications. Assurez-vous de garder votre profil à jour pour maximiser votre visibilité auprès des clients.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <h2 class="text-xl font-semibold mb-4">Comment accéder au support client ?</h2>
        <p class="text-gray-700">
            Si vous avez besoin d'aide ou avez des questions spécifiques, vous pouvez nous contacter via notre formulaire de support. Nous sommes disponibles pour vous assister avec toutes les questions concernant l'utilisation du site, la publication d'articles, ou tout autre problème que vous pourriez rencontrer.
        </p>
    </div>
</div>
@endsection
