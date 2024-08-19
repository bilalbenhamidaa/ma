@extends('layout')

@section('title', 'Connexion')

@section('content')


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un marché</title>
    <style>
        body {
            background: linear-gradient(135deg, #22b4a7, #08c, #b41ecf, #fc00ff);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            font-family: Arial, sans-serif;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #000; /* noir */
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff; /* blanc */
            color: #000; /* noir */
        }

        .btn {
            background-color: #b41ecf; /* violet */
            color: #fff; /* blanc */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
        }

        .btn:hover {
            background-color: #fc00ff; /* rose vif */
        }

        .error-message {
            color: #ff0000; /* rouge */
            margin-top: 10px;
        }

        .alert {
            background-color: #4CAF50; /* vert */
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        h2{
            color: #b41ecf; /* Dark violet heading */
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Ajouter un marché</h2>
        <form action="{{ route('gestion_marches.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="numero_marche">Numéro de marché :</label>
                <input type="number" id="numero_marche" name="numero_marche" class="form-control @error('numero_marche') is-invalid @enderror" required value="{{ old('numero_marche') }}">
                @error('numero_marche')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="intitule_marche">Intitulé du marché :</label>
                <input type="text" id="intitule_marche" name="intitule_marche" class="form-control @error('intitule_marche') is-invalid @enderror" required value="{{ old('intitule_marche') }}">
                @error('intitule_marche')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="numero_compte_principal">Numéro de compte principal :</label>
                <input type="number" id="numero_compte_principal" name="numero_compte_principal" class="form-control @error('numero_compte_principal') is-invalid @enderror" value="{{ old('numero_compte_principal') }}">
                @error('numero_compte_principal')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="banque_compte_principal">Banque du compte principal :</label>
                <input type="text" id="banque_compte_principal" name="banque_compte_principal" class="form-control @error('banque_compte_principal') is-invalid @enderror" value="{{ old('banque_compte_principal') }}">
                @error('banque_compte_principal')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="numero_compte_avenant">Numéro de compte avenant :</label>
                <input type="number" id="numero_compte_avenant" name="numero_compte_avenant" class="form-control @error('numero_compte_avenant') is-invalid @enderror" value="{{ old('numero_compte_avenant') }}">
                @error('numero_compte_avenant')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="banque_compte_avenant">Banque du compte avenant :</label>
                <input type="text" id="banque_compte_avenant" name="banque_compte_avenant" class="form-control @error('banque_compte_avenant') is-invalid @enderror" value="{{ old('banque_compte_avenant') }}">
                @error('banque_compte_avenant')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="montant_marche">Montant du marché :</label>
                <input type="number" id="montant_marche" name="montant_marche" class="form-control @error('montant_marche') is-invalid @enderror" value="{{ old('montant_marche') }}">
                @error('montant_marche')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="montant_avenant">Montant de l'avenant :</label>
                <input type="number" id="montant_avenant" name="montant_avenant" class="form-control @error('montant_avenant') is-invalid @enderror" value="{{ old('montant_avenant') }}">
                @error('montant_avenant')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="montant_nantissement">Montant de nantissement :</label>
                <input type="number" id="montant_nantissement" name="montant_nantissement" class="form-control @error('montant_nantissement') is-invalid @enderror" value="{{ old('montant_nantissement') }}">
                @error('montant_nantissement')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="montant_ordonnancement">Montant d'ordonnancement :</label>
                <input type="number" id="montant_ordonnancement" name="montant_ordonnancement" class="form-control @error('montant_ordonnancement') is-invalid @enderror" value="{{ old('montant_ordonnancement') }}">
                @error('montant_ordonnancement')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="reste_ordonnancer_nantissement">Reste à ordonnancer (nantissement) :</label>
                <input type="number" id="reste_ordonnancer_nantissement" name="reste_ordonnancer_nantissement" class="form-control @error('reste_ordonnancer_nantissement') is-invalid @enderror" value="{{ old('reste_ordonnancer_nantissement') }}">
                @error('reste_ordonnancer_nantissement')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="avenant_rib">RIB de l'avenant :</label>
                <input type="text" id="avenant_rib" name="avenant_rib" class="form-control @error('avenant_rib') is-invalid @enderror" value="{{ old('avenant_rib') }}">
                @error('avenant_rib')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="banque">Banque :</label>
                <input type="text" id="banque" name="banque" class="form-control @error('banque') is-invalid @enderror" value="{{ old('banque') }}">
                @error('banque')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="observations">Observations :</label>
                <textarea id="observations" name="observations" class="form-control @error('observations') is-invalid @enderror" rows="3">{{ old('observations') }}</textarea>
                @error('observations')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn">Ajouter</button>
        </form>
    </div>
</body>
</html>
@endsection