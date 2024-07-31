<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>{{ __("You're logged in!") }}</h3>

                    <h4 class="mt-6 mb-4">Liste des Artisans</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Sexe</th>
                                <th scope="col">Compétences</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Plage Horaire</th>
                                <th scope="col">Moyens de Paiement</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artisans as $artisan)
                                <tr>
                                    <th scope="row">{{ $artisan->id }}</th>
                                    <td>{{ $artisan->nom ?? 'Non spécifié' }}</td>
                                    <td>{{ $artisan->ville ?? 'Non spécifié' }}</td>
                                    <td>{{ $artisan->sexe ?? 'Non spécifié' }}</td>
                                    <td>{{ $artisan->competences ?? 'Non spécifié' }}</td>
                                    <td>{{ $artisan->contact }}</td>
                                    <td>{{ $artisan->plage_horaire ?? 'Non spécifié' }}</td>
                                    <td>{{ $artisan->moyens_paiement ?? 'Non spécifié' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
