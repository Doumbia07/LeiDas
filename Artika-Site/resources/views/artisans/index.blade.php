<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .table thead {
            background-color: #343a40;
            color: white;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .container {
            padding: 20px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .table {
                font-size: 0.9rem;
            }
        }
        @media (max-width: 576px) {
            .table thead {
                display: none;
            }
            .table tbody tr {
                display: block;
                margin-bottom: 15px;
            }
            .table tbody td {
                display: block;
                text-align: right;
                font-size: 0.9rem;
                border-bottom: 1px solid #dee2e6;
            }
            .table tbody td::before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Liste des Artisans</h1>
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
                        <th scope="row" data-label="ID">{{ $artisan->id }}</th>
                        <td data-label="Nom">{{ $artisan->Nom ?? 'Non spécifié' }}</td>
                        <td data-label="Ville">{{ $artisan->Ville ?? 'Non spécifié' }}</td>
                        <td data-label="Sexe">{{ $artisan->Sexe ?? 'Non spécifié' }}</td>
                        <td data-label="Compétences">{{ $artisan->Competences ?? 'Non spécifié' }}</td>
                        <td data-label="Contact">{{ $artisan->contact }}</td>
                        <td data-label="Plage Horaire">{{ $artisan->PlageHoraire ?? 'Non spécifié' }}</td>
                        <td data-label="Moyens de Paiement">{{ $artisan->MoyensPaiement ?? 'Non spécifié' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
