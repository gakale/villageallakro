<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisanale extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'categorie',
        'collection',
        'etat',
        'photo',
        'statut',
        'acteur_id',
    ];
    public function acteur()
    {
        return $this->belongsTo(Acteur::class);
    }
}
