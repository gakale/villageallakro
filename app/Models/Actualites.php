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
        'date',
        'image',
        'categorie',
        'status',
        'id_acteur',
        'contenu',
    ];

    public function acteur()
    {
        return $this->belongsTo(Acteur::class);
    }
}
