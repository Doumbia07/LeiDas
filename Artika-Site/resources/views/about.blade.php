@extends('layouts.app')

@section('content')
<!-- Utilisation de classes Bootstrap pour le style du body -->
<div class="bg-primary text-light py-5">
    <div class="container py-5">
        <h1 class="text-center mb-5">À propos de nous</h1>

        <section class="mb-5">
            <h2 class="h4 mb-4">Notre Mission</h2>
            <p class="text-light">
                Notre mission est de fournir une plateforme où les artisans peuvent partager leurs créations et se connecter avec des clients passionnés. Nous croyons en l'importance de soutenir les artisans locaux et de promouvoir l'artisanat de qualité.
            </p>
        </section>

        <section class="mb-5">
            <h2 class="h4 mb-4">Rencontrez l'Équipe</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Membre de l'équipe" class="card-img-top rounded-circle mx-auto mt-3" style="width: 100px; height: 100px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nom du Membre</h5>
                            <p class="card-text text-muted">Description du rôle et de l'expertise de ce membre de l'équipe.</p>
                        </div>
                    </div>
                </div>
                <!-- Répétez pour chaque membre de l'équipe -->
            </div>
        </section>

        <section class="mb-5">
            <h2 class="h4 mb-4">Notre Histoire</h2>
            <p class="text-light">
                Le projet a commencé avec une vision simple : créer un espace où les artisans peuvent se faire connaître et où les amateurs d'artisanat peuvent découvrir des pièces uniques. Après plusieurs mois de développement, nous avons lancé le site avec l'espoir de soutenir et de promouvoir l'artisanat local.
            </p>
        </section>

        <section class="mb-5">
            <h2 class="h4 mb-4">Nos Valeurs</h2>
            <ul class="list-unstyled text-light">
                <li><i class="bi bi-check-circle"></i> Qualité : Nous nous engageons à offrir une plateforme de haute qualité pour les artisans.</li>
                <li><i class="bi bi-check-circle"></i> Transparence : Nous croyons en une communication claire et honnête avec nos utilisateurs.</li>
                <li><i class="bi bi-check-circle"></i> Soutien : Nous sommes dédiés à soutenir les artisans locaux et à promouvoir leur travail.</li>
            </ul>
        </section>

        <section>
            <h2 class="h4 mb-4">Contactez-nous</h2>
            <p class="text-light">
                Pour toute question ou pour en savoir plus sur notre projet, n'hésitez pas à nous contacter à l'adresse suivante : <a href="mailto:artikaonline@gmail.com" class="text-light">artikaonline@gmail.com</a>.
            </p>
        </section>
    </div>
</div>
@endsection
