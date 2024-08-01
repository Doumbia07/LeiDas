<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artika Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('logoartika.png') }}" type="image/png">
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .scale-up {
            transition: transform 0.3s;
        }

        .scale-up:hover {
            transform: scale(1.05);
        }

        .header {
            background: linear-gradient(to right, #f7f7f7, #ffffff);
        }

        .hero {
            background: url('{{ asset('image/pagefond.jpg') }}') no-repeat center center/cover;
            color: #333;
        }

        .hero h1 {
            color: #fdfafa;
        }

        .hero a {
            background: #f59e0b;
            color: #fff;
        }

        .hero a:hover {
            background: #d97706;
        }

        .footer {
            background: #0e21d1;
        }

        .footer a {
            color: hsl(180, 23%, 97%);
        }

        .footer a:hover {
            color: #fbbf24;
        }
    </style>
</head>

<body class="font-light antialiased bg-gray-100">
    <!-- Header -->
    <header class="flex items-center justify-between py-3 px-6 border-b border-gray-100 header shadow-sm">
        <div class="flex items-center">
            <div class="text-gray-800 font-semibold flex items-center">
                <img src="{{ asset('logo/logoartika.png') }}" alt="Artika Online Logo" class="h-12 mr-2">
                <span class="text-yellow-500 text-xl"></span>
            </div>

        </div>
        <div class="flex items-center space-x-6">
            <!-- Connexion -->
            <a href="/login" class="btn btn-primary flex items-center hover:bg-yellow-600 text-white bg-blue-500 py-2 px-4 rounded">
                <i class="fas fa-sign-in-alt text-xl"></i>
                <span class="ml-2">Connexion</span>
            </a>
            <!-- Inscription -->
            <a href="/register" class="btn btn-primary flex items-center hover:bg-yellow-600 text-white bg-green-500 py-2 px-4 rounded">
                <i class="fas fa-user-plus text-xl"></i>
                <span class="ml-2">Inscription</span>
            </a>
        </div>
    </header>

    <!-- Hero Section -->
<div class="w-full text-center py-32 hero">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold fade-in text-white">
        Bienvenue sur <span class="text-yellow-500">Artika Online</span>
    </h1>
    <p class="text-gray-600 text-lg mt-2 fade-in text-white font-bold">L'univers des artisans.</p>
    <a href="/register" class="inline-block mt-6 px-6 py-3 bg-green-500 hover:bg-green-600 text-lg text-white font-semibold rounded-lg transition-colors duration-300 fade-in">
        Découvrir les articles
    </a>
</div>
    <!-- Articles Section -->
    <div class="container mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Article 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image1.jpeg') }}" alt="Article 1" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">Solutions de Fabrication</h2>
            </div>
            <!-- Article 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image2.jpg') }}" alt="Article 2" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">Élégance Artisanale</h2>
            </div>
            <!-- Article 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image3.jpg') }}" alt="Article 3" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">L'Art de la Poterie</h2>
            </div>
            <!-- Article 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Service de Construction : Expertise et Fiabilité</h2>
                <p class="text-gray-700">
                    Nous vous proposons des services de construction adaptés à tous vos besoins, qu'il s'agisse de projets de construction neuve ou d'ajouts à des structures existantes. Notre équipe d'experts est dédiée à la réalisation de vos projets avec un souci du détail et un respect des normes les plus strictes.

                    Nos services incluent :

                    Construction Neuve : Réalisation de bâtiments résidentiels, commerciaux ou industriels, avec une attention particulière à la qualité et à la durabilité.
                    Travaux d'Agrandissement : Ajout de nouvelles pièces, étages ou extensions pour répondre à vos besoins évolutifs.
                    Rénovations : Mise à jour et amélioration des structures existantes pour moderniser et optimiser vos espaces.
                    Nous nous engageons à offrir des solutions sur mesure, adaptées à vos exigences spécifiques, tout en respectant les délais et le budget. Faites confiance à notre savoir-faire pour transformer vos idées en réalité avec professionnalisme et excellence.                </p>
            </div>
            <!-- Article 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Élégance Artisanale : L'Art de la Création Traditionnelle</h2>
                <p class="text-gray-700">
                    Découvrez l'univers d'Élégance Artisanale, où chaque création est le fruit d'un savoir-faire traditionnel exceptionnel. Nous mettons en avant l'art et la maîtrise des métiers artisanaux pour offrir des produits qui allient beauté et qualité.

                    Métiers Associés à nos Créations :

                    Cordonnier : Expert dans l'art de la fabrication de chaussures, le cordonnier réalise chaque paire avec une attention minutieuse aux détails, garantissant confort et durabilité.
                    Maréchal-Ferrant : Spécialiste des techniques de finition des matériaux, apportant robustesse et élégance aux chaussures traditionnelles.
                    Bottier : Artisan spécialisé dans la conception et la réalisation de chaussures sur mesure, offrant des pièces uniques qui reflètent un savoir-faire de haute précision.
                    Artisan du Cuir : Maître dans le traitement et la transformation du cuir, créant des matériaux de haute qualité pour des chaussures à la fois élégantes et résistantes.
                    Nous nous engageons à préserver l'héritage de ces métiers traditionnels tout en intégrant des techniques modernes pour offrir des produits d'exception. Chaque création est une ode à l'élégance artisanale, alliant tradition et innovation pour un résultat inégalé.                </p>
            </div>
            <!-- Article 6 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">L'Art de la Poterie : Maîtrise et Tradition
                </h2>
                <p class="text-gray-700">
                    Plongez dans L'Art de la Poterie, où chaque pot en argile est une œuvre d'art façonnée avec passion et précision. Notre engagement est de préserver et de promouvoir les techniques artisanales qui font la renommée de la poterie traditionnelle.

                    Métiers Associés à notre Art de la Poterie :

                    Potiers : Maîtres dans l'art du façonnage de l'argile, les potiers créent des pièces uniques en utilisant des techniques ancestrales, du tournage à la décoration, pour donner vie à des pots qui allient forme et fonctionnalité.
                    Sculpteurs de Céramique : Spécialistes des détails et des ornements, ils ajoutent une dimension artistique aux pots en argile, transformant chaque pièce en une œuvre décorative.
                    Peintres de Céramique : Artisans chargés d'appliquer des motifs et des couleurs sur les pots, apportant une touche personnelle et esthétique à chaque création.
                    Émailleurs : Experts dans l'application et la cuisson des émaux, garantissant une finition durable et visuellement attrayante pour les pots en argile.
                    Nous célébrons la beauté de la poterie artisanale à travers des créations qui respectent les traditions tout en répondant aux goûts modernes. Chaque pot est une fusion parfaite de savoir-faire traditionnel et d'innovation créative, conçue pour enrichir votre espace avec une touche d'authenticité.                </p>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-white py-6">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="https://www.facebook.com" class="text-gray-400 hover:text-yellow-500"><i class="fab fa-facebook-f text-2xl"></i></a>
                <a href="https://www.twitter.com" class="text-gray-400 hover:text-yellow-500"><i class="fab fa-twitter text-2xl"></i></a>
                <a href="https://www.instagram.com" class="text-gray-400 hover:text-yellow-500"><i class="fab fa-instagram text-2xl"></i></a>
                <a href="https://www.linkedin.com" class="text-gray-400 hover:text-yellow-500"><i class="fab fa-linkedin-in text-2xl"></i></a>
                <a href="mailto:artikaonline@gmail.com" class="text-gray-400 hover:text-yellow-500"><i class="fas fa-envelope text-2xl"></i></a>
            </div>
            <p class="text-gray-400">© 2024 Artika Online. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>
