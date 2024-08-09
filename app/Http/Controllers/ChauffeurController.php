<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chauffeur;
use App\Models\EvaluationChauffeur;
use App\Models\Voiture;
use App\Models\Camion;
use App\Models\Reservation;


use Carbon\Carbon;

class ChauffeurController extends Controller
{
    public function Chauffeur()
    {
        $afficher = chauffeur::all();
        $reservations = Reservation::all();

        foreach ($afficher as $chauffeur) {
            $chauffeur->evaluations = EvaluationChauffeur::where('chauffeur_id', $chauffeur->id)->get();
        }
        return view('Chauffeur',compact('afficher','reservations'));

    }

    public function AjouterChauffeur()
    {
        return view('AjouterChauffeur');
    }

    public function ajoutTraitementChauffeur(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
        ]);

        if ($request->input('categorie') !== 'B') {
            return redirect()->back()->withErrors(['categorie' => 'Seuls les chauffeurs avec un permis de type B peuvent accéder aux voitures.']);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $path = $image->storeAs('storage/images', $fileName);
        } else {
            $fileName = 'noimage.jpg';
        }
        

        $dateEmission = Carbon::parse($request->input('dateEmission'));
        $dateExpiration = Carbon::parse($request->input('dateExpiration'));

        if ($dateExpiration->isPast()) {
            return redirect()->back()->withErrors(['dateExpiration' => 'La date d\'expiration du permis est dépassée.']);
        }

        $chauffeur = new Chauffeur();
        $chauffeur->nom = $request->input('Nom');
        $chauffeur->prenom = $request->input('Prenom');
        $chauffeur->numPermis = $request->input('numPermis');
        $chauffeur->experience = $request->input('experience');
        $chauffeur->dateEmission = $dateEmission;
        $chauffeur->categorie = $request->input('categorie');
        $chauffeur->image = $fileName;

        $chauffeur->save();

        return redirect()->back()->with('status', 'Chauffeur ajouté avec succès!');
    }
    

    public function destroy($id)
    {
        $chauffeur = Chauffeur::findOrFail($id);
        $chauffeur->delete();
        return redirect()->route('Chauffeur')->with('success', 'Chauffeur supprimé avec succès');
    }

    public function modifier($id)
    {
        $chauffeur = Chauffeur::findOrFail($id);
        return view('modifierChauffeur', compact('chauffeur'));
    }

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'Nom' => 'required|string|max:255',
        'Prenom' => 'required|string|max:255',
        'numPermis' => 'required|string|max:255',
        'experience' => 'required|string|max:255',
        'dateEmission' => 'required|date',
        'categorie' => 'required|string|max:255',
        // Ajoutez d'autres règles de validation au besoin
    ]);

    $chauffeur = Chauffeur::findOrFail($id);

    $chauffeur->nom = $request->input('Nom');
    $chauffeur->prenom = $request->input('Prenom');
    $chauffeur->numPermis = $request->input('numPermis');
    $chauffeur->experience = $request->input('experience');
    $chauffeur->dateEmission = $request->input('dateEmission');
    $chauffeur->categorie = $request->input('categorie');

    // Mettez à jour d'autres champs si nécessaire

    $chauffeur->save();

    return redirect()->back()->with('status', 'Chauffeur modifié avec succès!');
}



}