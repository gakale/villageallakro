<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epidemie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'image',
        'statut',
        'date_debut',
        'date_fin',
    ];

    public function maladies()
    {
        return $this->hasMany(Maladie::class);
    }
}
