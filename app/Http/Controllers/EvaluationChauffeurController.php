<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Voiture;
use App\Models\EvaluationChauffeur;
use Illuminate\Http\Request;

class EvaluationChauffeurController extends Controller
{
    public function showEvaluationForm()
    {
        $chauffeurs = Chauffeur::all();
        $voitures = Voiture::all(); //
        return view('client', compact('chauffeurs','voitures'));
    }

    public function evaluerChauffeur(Request $request)
    {
        $request->validate([
            'chauffeur_id' => 'required|exists:chauffeurs,id',
            'note' => 'required|numeric|min:1|max:5',
            'commentaire' => 'nullable|string|max:255',
        ]);

        $evaluation = new EvaluationChauffeur();
        $evaluation->chauffeur_id = $request->chauffeur_id;
        $evaluation->client_id = auth()->user()->id;
        $evaluation->note = $request->note;
        $evaluation->commentaire = $request->commentaire;
        $evaluation->save();

        
        return redirect()->route('client')->with('success', 'Évaluation envoyer avec succès');
    }
}
