<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artika Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            color: #333;
        }

        .hero a {
            background: #f59e0b;
            color: #fff;
        }

        .hero a:hover {
            background: #d97706;
        }

        .footer {
            background: #1f2937;
        }

        .footer a {
            color: #e5e7eb;
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
            <nav class="ml-10">
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-yellow-500 text-gray-500">Accueil</a></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-yellow-500 text-gray-500">Articles</a></li>
                    <li><a href="/artisans" class="hover:text-yellow-500 text-gray-500">Artisans</a></li>
                    <li><a href="/faq" class="hover:text-yellow-500 text-gray-500">À propos</a></li>
                </ul>
            </nav>
        </div>
        <div class="flex items-center space-x-6">
            <!-- Connexion et Inscription -->
            <a href="/login" class="flex items-center hover:text-yellow-500 text-gray-500">
                <i class="fas fa-sign-in-alt text-2xl"></i>
            </a>
            <a href="/register" class="flex items-center hover:text-yellow-500 text-gray-500">
                <i class="fas fa-user-plus text-2xl"></i>
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="w-full text-center py-32 hero">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold fade-in text-white">
            Bienvenue sur <span class="text-yellow-500">Artika Online</span>
        </h1>
        <p class="text-gray-600 text-lg mt-2 fade-in text-white font-bold">L'univers des artisans.</p>
        <a href="/register" class="inline-block mt-6 px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-lg text-white font-semibold rounded-lg transition-colors duration-300 fade-in">
            Découvrir les articles
        </a>
    </div>




    <!-- Articles Section -->
    <div class="container mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Article 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image1.jpeg') }}" alt="Article 1" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">Ingénieur Mécanicien</h2>
            </div>
            <!-- Article 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image2.jpg') }}" alt="Article 2" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">Titre de l'article 2</h2>
            </div>
            <!-- Article 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image3.jpg') }}" alt="Article 3" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">Titre de l'article 3</h2>
            </div>
            <!-- Article 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image.jpg') }}" alt="Article 3" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">Titre de l'article 3</h2>
            </div>
            <!-- Article 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image.jpg') }}" alt="Article 3" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">Titre de l'article 3</h2>
            </div>
            <!-- Article 6 -->
            <div class="bg-white p-6 rounded-lg shadow-md scale-up">
                <img src="{{ asset('image/image.jpg') }}" alt="Article 3" class="w-full h-48 object-cover rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800 mt-4">Titre de l'article 3</h2>
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
