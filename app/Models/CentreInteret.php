<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acteur;
class CentreInteret extends Model
{
    use HasFactory;

    public function acteurs()
    {
        return $this->belongsToMany(Acteur::class, 'acteur_centre_interet', 'id_centre_interet', 'id_acteur');
    }

}
