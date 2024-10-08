@extends('layouts.app')

@section('content')
<div class="relative w-full h-[400px] mb-6" style="background-color: black; background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-75"></div>
    <h1 class="absolute inset-0 flex items-center justify-center text-4xl font-bold text-white" style="background-color: rgba(242, 20, 20, 0.5);">Les fonctionnalités d'Artika Online</h1>
</div>

<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
            <h2 class="text-xl font-semibold mb-4"><i class="fas fa-edit mr-2 text-blue-500"></i>Comment publier un article ?</h2>
            <p class="text-gray-700">
                Pour publier un article, vous devez d'abord vous connecter à votre compte. Ensuite, cliquez sur "Publier un nouvel article" dans le menu. Remplissez le formulaire avec les détails de votre article, ajoutez une description et une image si nécessaire. Une fois que vous avez vérifié toutes les informations, cliquez sur "Publier" pour soumettre votre article et le rendre visible à tous les visiteurs du site.
            </p>
            <a href="{{ asset('articles/create') }}" class="text-blue-600 mt-4 inline-block">En savoir plus &rarr;</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
            <h2 class="text-xl font-semibold mb-4"><i class="fas fa-envelope mr-2 text-green-500"></i>Comment contacter un artisan ?</h2>
            <p class="text-gray-700">
                Vous pouvez contacter un artisan directement depuis la page de détails de son article. Chaque article affiche les coordonnées de l'artisan, incluant un lien mailto qui ouvre votre client de messagerie par défaut avec l'adresse email de l'artisan pré-remplie. Vous pouvez également utiliser notre formulaire de contact pour envoyer un message direct à l'artisan.
            </p>
            <a href="{{ asset('articles/index') }}" class="text-green-600 mt-4 inline-block">En savoir plus &rarr;</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
            <h2 class="text-xl font-semibold mb-4"><i class="fas fa-search mr-2 text-red-500"></i>Comment trouver les artisans ?</h2>
            <p class="text-gray-700">
                Pour trouver des artisans, accédez à la page "Artisans" sur notre site. Vous y trouverez une liste des artisans inscrits avec des informations détaillées sur chacun d'eux, y compris leurs coordonnées et les articles qu'ils ont publiés. Utilisez la barre de recherche ou les filtres pour affiner vos résultats en fonction de vos besoins spécifiques.
            </p>
            <a href="{{ asset('artisans/index') }}" class="text-red-600 mt-4 inline-block">En savoir plus &rarr;</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
            <h2 class="text-xl font-semibold mb-4"><i class="fas fa-cogs mr-2 text-yellow-500"></i>Quels services sont proposés par Artika Online ?</h2>
            <p class="text-gray-700">
                Artika Online propose une variété de services pour les artisans et les clients. Les artisans peuvent publier leurs articles, créer un profil personnalisé, et bénéficier de la visibilité accrue grâce à notre plateforme. Les clients peuvent rechercher des artisans, consulter leurs articles, et entrer en contact directement avec eux. Nous offrons également des fonctionnalités de gestion des publications et des outils de communication pour faciliter les interactions.
            </p>
            <a href="#" class="text-yellow-600 mt-4 inline-block">En savoir plus &rarr;</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
            <h2 class="text-xl font-semibold mb-4"><i class="fas fa-search-plus mr-2 text-purple-500"></i>Comment utiliser les fonctionnalités de recherche ?</h2>
            <p class="text-gray-700">
                Notre site dispose d'une fonctionnalité de recherche avancée pour vous aider à trouver facilement les articles et les artisans que vous recherchez. Vous pouvez filtrer les résultats par catégorie, mot-clé, ou localisation. Utilisez la barre de recherche en haut de la page pour entrer vos critères et explorer les résultats.
            </p>
            <a href="#" class="text-purple-600 mt-4 inline-block">En savoir plus &rarr;</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
            <h2 class="text-xl font-semibold mb-4"><i class="fas fa-user-circle mr-2 text-indigo-500"></i>Comment gérer mon profil d'artisan ?</h2>
            <p class="text-gray-700">
                Une fois connecté, vous pouvez accéder à votre profil depuis le menu principal. Vous pouvez mettre à jour vos informations personnelles, ajouter des articles, et gérer vos publications. Assurez-vous de garder votre profil à jour pour maximiser votre visibilité auprès des clients.
            </p>
            <a href="#" class="text-indigo-600 mt-4 inline-block">En savoir plus &rarr;</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
            <h2 class="text-xl font-semibold mb-4"><i class="fas fa-headset mr-2 text-teal-500"></i>Comment accéder au support client ?</h2>
            <p class="text-gray-700">
                Si vous avez besoin d'aide ou avez des questions spécifiques, vous pouvez nous contacter via notre formulaire de support. Nous sommes disponibles pour vous assister avec toutes les questions concernant l'utilisation du site, la publication d'articles, ou tout autre problème que vous pourriez rencontrer.
            </p>
            <a href="#" class="text-teal-600 mt-4 inline-block">En savoir plus &rarr;</a>
        </div>
    </div>
</div>
@endsection
