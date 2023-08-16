<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'date',
        'image',
        'id_acteur',
    ];

    public function acteur()
    {
        return $this->belongsTo(Acteur::class);
    }
}
