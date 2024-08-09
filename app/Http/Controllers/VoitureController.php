<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\voiture;

class VoitureController extends Controller
{
    public function Voiture()
    {
        $afficher = voiture::all();
        return view('Voiture',compact('afficher'));

    }

    public function Ajouter()
    {
        return view('Ajouter');
    }

    public function ajoutTraitement(Request $request)
    {
        $validatedData = $request->validate([
            'Marque' => 'required|string|max:255',
            'Date' => 'required|date',
            'Matricule' => 'required|string|max:255',
            'Couleur' => 'required|string|max:255',
            'Prix' => 'numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'statut' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $path = $image->storeAs('storage/images', $fileName);
        } else {
            $fileName = 'noimage.jpg';
        }

        $voiture = new Voiture();

        $voiture->marque = $request->input('Marque');
        $voiture->date_achat = $request->input('Date');
        $voiture->kilometrage = $request->input('Kilommetrage', 250);
        $voiture->matricule = $request->input('Matricule');
        $voiture->couleur = $request->input('Couleur');
        $voiture->image = $fileName;
        $voiture->prix = $request->input('Prix', 20000);
        $voiture->statut = $request->input('statut');

        $voiture->save();

        return redirect()->back()->with('status', 'Voiture ajoutée avec succès!');
    }

    public function destroy($id)
        {
            $voiture = Voiture::findOrFail($id);
            $voiture->delete();
            return redirect()->route('Voiture')->with('success', 'Voiture supprimé avec succès');
        }

        public function modifier($id)
    {
        $voiture = Voiture::findOrFail($id);
        return view('modifierVoiture', compact('voiture'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Marque' => 'required|string|max:255',
            'Date' => 'required|date',
            'Kilometrage' => 'required',
            'Matricule' => 'required|string|max:255',
            'Couleur' => 'required|string|max:255',
            'Prix' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif', 
            'statut' => 'required|string|max:255',
        ]);

        $voiture = Voiture::findOrFail($id);

        $voiture->marque = $request->input('Marque');
        $voiture->date_achat = $request->input('Date');
        $voiture->kilometrage = $request->input('Kilometrage');
        $voiture->matricule = $request->input('Matricule');
        $voiture->couleur = $request->input('Couleur');
        $voiture->prix = $request->input('Prix');
        $voiture->statut = $request->input('statut');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $path = $image->storeAs('storage/images', $fileName);
            $voiture->image = $fileName;
        }

        $voiture->save();

        return redirect()->route('Voiture')->with('success', 'Voiture modifiée avec succès');
    }


}
