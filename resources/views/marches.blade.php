@extends('layout')

@section('title', 'Connexion')

@section('content')*



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
            color: #4B0082; /* Dark violet heading */
            text-align: center;
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
            background-color: #4B0082; /* Dark violet header background */
            color: #fff; /* White text for headers */
        }
        .table tr:nth-child(even) {
            background-color: #E6E6FA; /* Light violet background for even rows */
        }
        .table tr:nth-child(odd) {
            background-color: #F8F8FF; /* Light gray background for odd rows */
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

</head>
<body>
    <div class="container">
        <h1>Liste des Marchés</h1>

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
                </tr>
            </thead>
            <tbody>
                @foreach($Marches as $Marche)
                    <tr>
                        <td>{{ $Marche->numero_marche }}</td>
                        <td>{{ $Marche->intitule_marche }}</td>
                        <td>{{ $Marche->numero_compte_principal }}</td>
                        <td>{{ $Marche->banque_compte_principal }}</td>
                        <td>{{ $Marche->numero_compte_avenant }}</td>
                        <td>{{ $Marche->banque_compte_avenant }}</td>
                        <td>{{ $Marche->montant_avenant }}</td>
                        <td>{{ $Marche->montant_nantissement }}</td>
                        <td>{{ $Marche->montant_ordonnancement }}</td>
                        <td>{{ $Marche->reste_ordonnancer_nantissement }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection