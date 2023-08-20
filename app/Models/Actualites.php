<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualites extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'date_publication',
        'image',
        'categorie',
        'statut',
        'acteur_id',
        'contenu',

    ];

    public function acteur()
    {
        return $this->belongsTo(Acteur::class);
    }
}
