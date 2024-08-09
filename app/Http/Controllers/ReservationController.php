<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create($voiture_id)
    {
        $voiture = Voiture::findOrFail($voiture_id);
        return view('reservation.create', compact('voiture'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'voiture_id' => 'required|exists:voitures,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $voiture = Voiture::findOrFail($request->voiture_id);
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $prix_total = $this->calculerPrixTotal($voiture, $start_date, $end_date);
    
        $reservation = new Reservation();
        $reservation->voiture_id = $request->voiture_id;
        $reservation->start_date = $start_date;
        $reservation->end_date = $end_date;
        $reservation->prix_total = $prix_total;
        $reservation->save();
    

        $user = Auth::user();
        session(['user_id' => $user->id]);
        return redirect()->route('tarification', ['reservation_id' => $reservation->id])->with('status', 'reservation effectuez avec succès!');
    }


    public function tarification($reservation_id)
    {
        $reservation = Reservation::findOrFail($reservation_id);
        $voiture = $reservation->voiture; 
        $user_id = session('user_id');
        $user = User::findOrFail($user_id);
        return view('tarification', compact('reservation','voiture', 'user'));
    }



    private function calculerPrixTotal($voiture, $start_date, $end_date)
    {

        $nombre_jours = Carbon::parse($start_date)->diffInDays(Carbon::parse($end_date));
        $prix_total = $nombre_jours * $voiture->prix;
        return $prix_total;
    }
}
