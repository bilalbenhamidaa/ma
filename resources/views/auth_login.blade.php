@extends('layout')

@section('title', 'Connexion')

@section('content')
    <div class="login-container">
        <h2>Connexion</h2>
        
        @if(session('success'))
            <div class="alert success-alert">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert error-alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Connexion</button>
        </form>
        <p class="signup-text">Pas encore inscrit ? <a href="{{ route('register') }}" class="signup-link">Inscrivez-vous ici</a></p>
    </div>

    <style>
        body {
            background: linear-gradient(135deg, #22b4a7, #08c, #b41ecf, #fc00ff);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            font-family: Arial, sans-serif;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        .signup-text {
            color: #000; /* noir */
            text-align: center;
            margin-top: 20px;
        }

        .signup-link {
            color: #08c; /* couleur personnalisée pour le lien */
            text-decoration: underline; /* souligner le lien */
        }

        .signup-link:hover {
            color: #b41ecf; /* couleur au survol du lien */
        }

        .alert {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        .success-alert {
            background-color: #4CAF50; /* vert */
            color: white;
        }

        .error-alert {
            background-color: #ff0000; /* rouge */
            color: white;
        }

        .error-message {
            color: #ff0000; /* rouge */
            margin-top: 10px;
        }
    </style>
@endsection
