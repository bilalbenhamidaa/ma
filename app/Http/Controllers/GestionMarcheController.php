<?php

namespace App\Http\Controllers;

use App\Models\GestionMarche;
use Illuminate\Http\Request;

class GestionMarcheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestionMarches = GestionMarche::all();
        return view('gestion_marches_index', compact('gestionMarches'));
    }

    public function marches()
    {
        // Assuming GestionMarche is your model for market management
        $Marches = GestionMarche::all();

        return view('marches', compact('Marches'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion_marches_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero_marche' => 'required|integer',
            'intitule_marche' => 'required|string|max:255',
            'numero_compte_principal' => 'nullable|integer',
            'banque_compte_principal' => 'nullable|string|max:255',
            'numero_compte_avenant' => 'nullable|integer',
            'banque_compte_avenant' => 'nullable|string|max:255',
            'montant_marche' => 'nullable|integer',
            'montant_avenant' => 'nullable|integer',
            'montant_nantissement' => 'nullable|integer',
            'montant_ordonnancement' => 'nullable|integer',
            'reste_ordonnancer_nantissement' => 'nullable|integer',
            'avenant_rib' => 'nullable|string|max:255',
            'banque' => 'nullable|string|max:255',
            'observations' => 'nullable|string',
        ]);

        try {
            $gestionMarche = new GestionMarche();
            $gestionMarche->numero_marche = $request->input('numero_marche');
            $gestionMarche->intitule_marche = $request->input('intitule_marche');
            $gestionMarche->numero_compte_principal = $request->input('numero_compte_principal');
            $gestionMarche->banque_compte_principal = $request->input('banque_compte_principal');
            $gestionMarche->numero_compte_avenant = $request->input('numero_compte_avenant');
            $gestionMarche->banque_compte_avenant = $request->input('banque_compte_avenant');
            $gestionMarche->montant_marche = $request->input('montant_marche');
            $gestionMarche->montant_avenant = $request->input('montant_avenant');
            $gestionMarche->montant_nantissement = $request->input('montant_nantissement');
            $gestionMarche->montant_ordonnancement = $request->input('montant_ordonnancement');
            $gestionMarche->reste_ordonnancer_nantissement = $request->input('reste_ordonnancer_nantissement');
            $gestionMarche->avenant_rib = $request->input('avenant_rib');
            $gestionMarche->banque = $request->input('banque');
            $gestionMarche->observations = $request->input('observations');

            $gestionMarche->save();

            return redirect()->route('gestion_marches.index')->with('success', 'GestionMarche créée avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de la création de la gestion de marché. Veuillez réessayer.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gestionMarche = GestionMarche::findOrFail($id);
        return view('gestion_marches_show', compact('gestionMarche'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Code pour afficher le formulaire d'édition d'un marché
        $gestionMarche = GestionMarche::findOrFail($id);
        return view('gestion_marches_edit', compact('gestionMarche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Code pour mettre à jour les données d'un marché
        $validatedData = $request->validate([
            'numero_marche' => 'required|integer',
            'intitule_marche' => 'required|string|max:255',
            'numero_compte_principal' => 'nullable|integer',
            'banque_compte_principal' => 'nullable|string|max:255',
            'numero_compte_avenant' => 'nullable|integer',
            'banque_compte_avenant' => 'nullable|string|max:255',
            'montant_marche' => 'nullable|integer',
            'montant_avenant' => 'nullable|integer',
            'montant_nantissement' => 'nullable|integer',
            'montant_ordonnancement' => 'nullable|integer',
            'reste_ordonnancer_nantissement' => 'nullable|integer',
            'avenant_rib' => 'nullable|string|max:255',
            'banque' => 'nullable|string|max:255',
            'observations' => 'nullable|string',
        ]);


        $gestionMarche = GestionMarche::findOrFail($id);
        $gestionMarche->numero_marche = $request->input('numero_marche');
        $gestionMarche->intitule_marche = $request->input('intitule_marche');
        $gestionMarche->numero_compte_principal = $request->input('numero_compte_principal');
        $gestionMarche->banque_compte_principal = $request->input('banque_compte_principal');
        $gestionMarche->numero_compte_avenant = $request->input('numero_compte_avenant');
        $gestionMarche->banque_compte_avenant = $request->input('banque_compte_avenant');
        $gestionMarche->montant_marche = $request->input('montant_marche');
        $gestionMarche->montant_avenant = $request->input('montant_avenant');
        $gestionMarche->montant_nantissement = $request->input('montant_nantissement');
        $gestionMarche->montant_ordonnancement = $request->input('montant_ordonnancement');
        $gestionMarche->reste_ordonnancer_nantissement = $request->input('reste_ordonnancer_nantissement');
        $gestionMarche->avenant_rib = $request->input('avenant_rib');
        $gestionMarche->banque = $request->input('banque');
        $gestionMarche->observations = $request->input('observations');
        $gestionMarche->save();
        return redirect()->route('gestion_marches.index')->with('success', 'GestionMarche mise à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gestionMarche = GestionMarche::findOrFail($id);
        $gestionMarche->delete();

        return redirect()->route('gestion_marches.index')->with('success', 'GestionMarche supprimée avec succès.');
    }
}
