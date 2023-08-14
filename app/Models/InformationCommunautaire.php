<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationCommunautaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_information_communautaire',
        'id_acteur',
        'nom',
        'description',
        'date_creation',
        'site_web',
        'objectif',
        'evenement',
        'statut',


    ];
    public function acteur()
    {
        return $this->belongsTo(Acteur::class, 'id_acteur');
    }
}
