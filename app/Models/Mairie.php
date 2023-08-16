<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mairie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
        'logo',
        'image',
        'description',
    ];
    public function projets() : HasMany
    {
        return $this->hasMany(ProjetMairie::class, 'id_mairie');
    }
}
