@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Résultats de la recherche</h1>
    @if($artisans->isEmpty())
        <p>Aucun artisan trouvé pour cette recherche.</p>
    @else
        <table class="table table-striped">
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
                        <td>{{ $artisan->Nom ?? 'Non spécifié' }}</td>
                        <td>{{ $artisan->Ville ?? 'Non spécifié' }}</td>
                        <td>{{ $artisan->Sexe ?? 'Non spécifié' }}</td>
                        <td>{{ $artisan->Competences ?? 'Non spécifié' }}</td>
                        <td>{{ $artisan->contact }}</td>
                        <td>{{ $artisan->PlageHoraire ?? 'Non spécifié' }}</td>
                        <td>{{ $artisan->MoyensPaiement ?? 'Non spécifié' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
