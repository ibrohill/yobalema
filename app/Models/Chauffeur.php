<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\Reservation;


class Chauffeur extends Model
{
    protected $fillable = ['nom', 'prenom', 'numPermis', 'experience', 'dateEmission', 'categorie', 'image'];

    public function estPermisExpire()
    {
        $dateExpiration = Carbon::parse($this->dateEmission)->addYears(1); 
        return now()->greaterThan($dateExpiration);
    }

    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }

    public function Camion()
    {
        return $this->hasMany(Camion::class);
    }

    public function setDateEmissionAttribute($value)
    {
        $this->attributes['dateEmission'] = Carbon::parse($value);
    }

    public function evaluations()
    {
        return $this->hasMany(EvaluationChauffeur::class);
    }

    public function getImageAttribute()
    {
        return asset('storage/images/' . $this->attributes['image']);
    }
    public function tarifications()
    {
        return $this->hasMany(Tarification::class);
    }

}

