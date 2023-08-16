<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Mairie;
use App\Models\Acteur;

class ProjetMairie extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_mairie',
        'id_acteur',
        'projet',
        'description',
        'image',
        'video',
    ];
    public function mairie(): BelongsTo
    {
        return $this->belongsTo(Mairie::class, 'id_mairie');
    }

    public function acteur(): BelongsTo
    {
        return $this->belongsTo(Acteur::class, 'id_acteur');
    }
}
