<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'voiture_id',
        'start_date',
        'end_date',
        'prix_total',
        // Ajoutez d'autres attributs au besoin
    ];

    // Relations
    public function voiture()
    {
        return $this->belongsTo(Voiture::class);
    }
}
