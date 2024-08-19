@extends('layout')

@section('title', 'Connexion')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Marchés</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0; /* Light gray background */
            color: #333; /* Dark gray text */
        }
        .container {
            max-width: 1200px; /* Adjusted max-width for larger screens */
            margin: 20px auto;
            background-color: #fff; /* White background for content */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Subtle shadow effect */
        }
        h1 {
            color: #b41ecf; /* Dark violet heading */
            text-align: center;
            margin-bottom: 20px; /* Add margin-bottom for spacing */
        }
        .top-bar {
            display: flex;
            justify-content: flex-end; /* Align items to the right */
            margin-bottom: 20px; /* Add margin-bottom for spacing */
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd; /* Light gray borders */
            padding: 12px; /* Increased padding for better readability */
            text-align: left;
        }
        .table th {
            background-color: #b41ecf; /* Dark violet header background */
            color: #fff; /* White text for headers */
        }
        .table tr:nth-child(even) {
            background-color: #E6E6FA; /* Light violet background for even rows */
        }
        .table tr:nth-child(odd) {
            background-color: #F8F8FF; /* Light gray background for odd rows */
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #31708f; /* Blueish alert text */
            background-color: #d9edf7; /* Light blue alert background */
            border-color: #bce8f1; /* Border color for alert */
        }
        .alert-success {
            color: #3c763d; /* Green success alert text */
            background-color: #dff0d8; /* Light green success alert background */
            border-color: #d6e9c6; /* Border color for success alert */
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            margin-right: 5px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            user-select: none;
            text-decoration: none;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary {
            color: #fff;
            background-color: #007bff; /* Blue button color */
            border-color: #007bff; /* Border color for primary button */
        }
        .btn-primary:hover, .btn-primary:focus {
            background-color: #0056b3; /* Darker shade on hover */
            border-color: #004085; /* Darker shade border on hover */
        }
        .btn-success {
            color: #fff;
            background-color: #28a745; /* Green button color */
            border-color: #28a745; /* Border color for success button */
        }
        .btn-success:hover, .btn-success:focus {
            background-color: #218838; /* Darker shade on hover */
            border-color: #1e7e34; /* Darker shade border on hover */
        }
        .btn-danger {
            color: #fff;
            background-color: #d9534f; /* Danger button color */
            border-color: #d43f3a; /* Border color for danger button */
        }
        .btn-danger:hover, .btn-danger:focus {
            background-color: #c9302c; /* Darker shade on hover */
            border-color: #ac2925; /* Darker shade border on hover */
        }
        .button-group {
            display: flex;
            gap: 5px;
        }

        /* Responsive styles for larger screens */
        @media (min-width: 992px) {
            .container {
                padding: 30px;
            }
            .table td, .table th {
                padding: 15px; /* Increased padding for better readability on larger screens */
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Liste des Marchés</h1>
        <div class="top-bar">
            <a href="{{ route('gestion_marches.create') }}" class="btn btn-primary">Créer un nouveau marché</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Numéro de Marché</th>
                    <th>Intitulé de Marché</th>
                    <th>Numéro Compte Principal</th>
                    <th>Banque Compte Principal</th>
                    <th>Numéro Compte Avenant</th>
                    <th>Banque Compte Avenant</th>
                    <th>Montant d'Avenant</th>
                    <th>Montant de Nantissement</th>
                    <th>Montant d'Ordonnancement</th>
                    <th>Reste à Ordonnancer Nantissement</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gestionMarches as $gestionMarche)
                    <tr>
                        <td>{{ $gestionMarche->numero_marche }}</td>
                        <td>{{ $gestionMarche->intitule_marche }}</td>
                        <td>{{ $gestionMarche->numero_compte_principal }}</td>
                        <td>{{ $gestionMarche->banque_compte_principal }}</td>
                        <td>{{ $gestionMarche->numero_compte_avenant }}</td>
                        <td>{{ $gestionMarche->banque_compte_avenant }}</td>
                        <td>{{ $gestionMarche->montant_avenant }}</td>
                        <td>{{ $gestionMarche->montant_nantissement }}</td>
                        <td>{{ $gestionMarche->montant_ordonnancement }}</td>
                        <td>{{ $gestionMarche->reste_ordonnancer_nantissement }}</td>
                        <td>
                            <div class="button-group">
                                <a href="{{ route('gestion_marches.show', $gestionMarche->id) }}" class="btn btn-primary">Voir</a>
                                <a href="{{ route('gestion_marches.edit', $gestionMarche->id) }}" class="btn btn-success">Modifier</a>
                                <form action="{{ route('gestion_marches.destroy', $gestionMarche->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
