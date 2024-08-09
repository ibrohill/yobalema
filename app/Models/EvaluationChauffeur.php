<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Chauffeur;

class EvaluationChauffeur extends Model
{
    protected $fillable = [
        'chauffeur_id', 'client_id', 'note', 'commentaire'
    ];

    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }

    
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    
}
