<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'nom',
        'drop_off_location', 
        'pick_up_date', 
        'drop_off_date', 
        'pick_up_time', 
        'chauffeur_id', 
        'voiture_id', 
    ];

    
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }

    public function voiture()
    {
        return $this->belongsTo(Voiture::class);
    }
}
