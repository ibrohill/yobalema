<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


use App\Models\Location;
use App\Models\Chauffeur;
use App\Models\voiture;
use App\Models\Camion;


class AcceuilController extends Controller
{
      
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $name = $user->name;
            $email = $user->email;
            $password = $user->password; 
        } else {
            $name = null;
            $email = null;
            $password = null;
        }

    $voitures = Voiture::all();
    $camions = Camion::all();
    $chauffeurs = Chauffeur::all();
  
    return view('Acceuil', ['name' => $name, 'email' => $email, 'voitures' => $voitures, 'camions' => $camions, 'chauffeurs' => $chauffeurs]);
    }

      
    public function facture()
    {
        return View('Facture');
    }

    public function ajoutTraitementlocation(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string',
            'Pick-up-date' => 'required|date',
            'Drop-off-date' => 'required|date',
            'chauffeur_id' => 'required|exists:chauffeurs,id',
            'voiture_id' => 'required|exists:voitures,id', 
        ]);
    
        $location = new Location();
        $location->nom = $request->input('Nom');
        $location->drop_off_location = $request->input('Drop-off-location');
        $location->pick_up_date = $request->input('Pick-up-date');
        $location->drop_off_date = $request->input('Drop-off-date');
        $location->pick_up_time = $request->input('Pick-up-time');
        $location->chauffeur_id = $request->input('chauffeur_id');
        $location->voiture_id = $request->input('voiture_id');
    
        $location->save();
    
        $reservation_id = $location->id;
    
        return redirect()->route('tarification', ['reservation_id' => $reservation_id]);
    }

    public function aide()
        {
            return view('aide');
        }

    public function plan()
    {
        return view('plan');
    }

    public function nos_Prix()
    {
        return view('prix');
    }
    
}
