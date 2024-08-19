<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('auth_login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
{
    // Valide les données du formulaire de connexion
    $credentials = $request->validate([
        'email' => ['required', 'email'], // Le champ email est requis et doit être un email valide
        'password' => ['required'], // Le champ password est requis
    ]);

    // Tente d'authentifier l'utilisateur avec les identifiants fournis
    if (Auth::attempt($credentials)) {
        // Si l'authentification réussit, régénère la session
        $request->session()->regenerate();

        // Vérifie le rôle de l'utilisateur
        if (Auth::user()->role === 'admin') {
            // Redirection pour l'administrateur
            return redirect()->route('gestion_marches.index');
        } else {
            // Redirection pour l'utilisateur standard
            return redirect()->route('marches');
        }
    }

    // Si l'authentification échoue, retourne à la page précédente avec une erreur
    return back()->withErrors([
        'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.', // Message d'erreur affiché pour l'utilisateur
    ])->onlyInput('email'); // Ne garde que le champ 'email' dans le formulaire pour que l'utilisateur n'ait pas à le remplir à nouveau
}
public function logout(Request $request)
{
    // Déconnecte l'utilisateur
    Auth::logout();

    // Invalide la session
    $request->session()->invalidate();

    // Régénère le token CSRF
    $request->session()->regenerateToken();

    // Redirige vers la page d'accueil
    return redirect('/');
}

}
