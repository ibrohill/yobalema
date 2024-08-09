<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camion;
// use App\Models\EvaluationChauffeur;
// use App\Models\Voiture;
// use App\Models\Reservation;
// use Carbon\Carbon;



class CamionController extends Controller
{
      public function index()
   {
      $camions = Camion::all();
      return view("Camion", compact('camions'));
   }

   public function AjouterCamion()
   {
      return view('ajouterCamion');
   }

   public function ajoutTraitementCamion(Request $request)
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

      $camion = new Camion();

      $camion->marque = $request->input('Marque');
      $camion->date_achat = $request->input('Date');
      $camion->kilometrage = $request->input('Kilommetrage', 250);
      $camion->matricule = $request->input('Matricule');
      $camion->couleur = $request->input('Couleur');
      $camion->image = $fileName;
      $camion->prix = $request->input('Prix', 20000);
      $camion->statut = $request->input('statut');

      $camion->save();

      return redirect()->back()->with('status', 'Camion ajoutée avec succès!');
   }

   public function destroy($id)
   {
      $camion = Camion::findOrFail($id);
      $camion->delete();
      return redirect()->route('Camion')->with('success', 'camion supprimé avec succès');
   }

}