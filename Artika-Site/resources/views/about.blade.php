@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">À propos de nous</h1>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-4">Notre Mission</h2>
        <p class="text-gray-700">
            Notre mission est de fournir une plateforme où les artisans peuvent partager leurs créations et se connecter avec des clients passionnés. Nous croyons en l'importance de soutenir les artisans locaux et de promouvoir l'artisanat de qualité.
        </p>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-4">Rencontrez l'Équipe</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Membre de l'équipe" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Nom du Membre</h3>
                    <p class="text-gray-700">Description du rôle et de l'expertise de ce membre de l'équipe.</p>
                </div>
            </div>
            <!-- Répétez pour chaque membre de l'équipe -->
        </div>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-4">Notre Histoire</h2>
        <p class="text-gray-700">
            Le projet a commencé avec une vision simple : créer un espace où les artisans peuvent se faire connaître et où les amateurs d'artisanat peuvent découvrir des pièces uniques. Après plusieurs mois de développement, nous avons lancé le site avec l'espoir de soutenir et de promouvoir l'artisanat local.
        </p>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-semibold mb-4">Nos Valeurs</h2>
        <ul class="list-disc list-inside text-gray-700">
            <li>Qualité : Nous nous engageons à offrir une plateforme de haute qualité pour les artisans.</li>
            <li>Transparence : Nous croyons en une communication claire et honnête avec nos utilisateurs.</li>
            <li>Soutien : Nous sommes dédiés à soutenir les artisans locaux et à promouvoir leur travail.</li>
        </ul>
    </section>

    <section>
        <h2 class="text-2xl font-semibold mb-4">Contactez-nous</h2>
        <p class="text-gray-700">
            Pour toute question ou pour en savoir plus sur notre projet, n'hésitez pas à nous contacter à l'adresse suivante : <a href="mailto:contact@artisansite.com" class="text-blue-500 hover:underline">contact@artisansite.com</a>.
        </p>
    </section>
</div>
@endsection
