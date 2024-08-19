<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // Assurez-vous que 'register' est le nom de votre vue de formulaire d'inscription
    }

    public function register(Request $request)
    {
        // Logique de traitement d'inscription ici
        // Validation des données du formulaire
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Création d'un nouvel utilisateur
    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = bcrypt($validatedData['password']); // Crypte le mot de passe
    $user->save();

    // Redirection après inscription réussie
    return redirect('/')->with('success', 'Inscription réussie ! Bienvenue.');
    }
}
