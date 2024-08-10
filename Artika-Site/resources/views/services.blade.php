@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 bg-dark">
    <h1 class="text-3xl font-bold mb-6 text-center text-primary">Nos Services</h1>
    <p class="text-lg text-muted mb-6 text-center">
        Découvrez les divers services que nous offrons pour répondre à tous vos besoins.
    </p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Service 1: Rénovation -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/renovation-image.jpg" class="card-img-top" alt="Rénovation" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Rénovation</h5>
                    <p class="card-text text-muted">
                        Transformez votre espace selon vos besoins avec nos artisans spécialisés en rénovation. Nous offrons des services pour tous types de projets, qu'ils soient petits ou grands.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 2: Construction -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/construction-image.jpg" class="card-img-top" alt="Construction" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Construction</h5>
                    <p class="card-text text-muted">
                        Que vous construisiez une nouvelle maison ou que vous ajoutiez des extensions à une structure existante, nos experts en construction sont là pour réaliser votre projet.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 3: Design d'Intérieur -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/interior-design-image.jpg" class="card-img-top" alt="Design d'intérieur" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Design d'Intérieur</h5>
                    <p class="card-text text-muted">
                        Nos designers d'intérieur créent des espaces fonctionnels et esthétiques qui reflètent vos goûts et vos besoins. Transformez votre intérieur avec nos services de design.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 4: Peinture -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/painting-image.jpg" class="card-img-top" alt="Peinture" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Peinture</h5>
                    <p class="card-text text-muted">
                        Nos artisans peintres transforment vos espaces avec des couleurs vibrantes et des finitions de haute qualité. Que ce soit pour l'intérieur ou l'extérieur, nous avons des solutions adaptées à vos besoins.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 5: Menuiserie -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/carpentry-image.jpg" class="card-img-top" alt="Menuiserie" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Menuiserie</h5>
                    <p class="card-text text-muted">
                        Nos menuisiers fabriquent et installent des meubles sur mesure, des armoires et des structures en bois pour améliorer et personnaliser votre espace.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 6: Réparation Électrique -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/electric-repair-image.jpg" class="card-img-top" alt="Réparation Électrique" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Réparation Électrique</h5>
                    <p class="card-text text-muted">
                        Nos électriciens qualifiés réalisent des installations et des réparations électriques pour assurer la sécurité et la fonctionnalité de votre habitation ou de votre entreprise.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 7: Plomberie -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/plumbing-image.jpg" class="card-img-top" alt="Plomberie" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Plomberie</h5>
                    <p class="card-text text-muted">
                        Nos plombiers expérimentés interviennent pour tous vos besoins de plomberie, qu'il s'agisse de réparations, d'installations ou de maintenance.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 8: Jardinage -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/gardening-image.jpg" class="card-img-top" alt="Jardinage" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Jardinage</h5>
                    <p class="card-text text-muted">
                        Nos jardiniers experts créent et entretiennent des jardins magnifiques et fonctionnels, adaptés à vos préférences et à votre espace.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 9: Nettoyage -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/cleaning-image.jpg" class="card-img-top" alt="Nettoyage" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Nettoyage</h5>
                    <p class="card-text text-muted">
                        Nos services de nettoyage professionnels garantissent des espaces propres et accueillants, que ce soit pour des résidences, des bureaux ou des espaces commerciaux.
                    </p>
                </div>
            </div>
        </div>

        <!-- Service 10: Déménagement -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                <img src="path/to/moving-image.jpg" class="card-img-top" alt="Déménagement" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Service de Déménagement</h5>
                    <p class="card-text text-muted">
                        Facilitez votre déménagement avec nos services professionnels. Nous prenons en charge le transport de vos biens avec soin et efficacité.
                    </p>
                </div>
            </div>
        </div>

        <!-- Ajouter d'autres services ici -->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Effet de survol pour les cartes de services
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('mouseover', function() {
                card.style.transform = 'scale(1.03)';
                card.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.2)';
            });
            card.addEventListener('mouseout', function() {
                card.style.transform = 'scale(1)';
                card.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
            });
        });
    });
</script>
@endsection
