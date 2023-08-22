<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class PeriodeGarde extends Model
{
    use HasFactory;
    protected $fillable = [
        'pharmacie_id',
        'jour',
        'heure_debut',
        'heure_fin',
        'statut',
    ];


    protected $casts = [
        'jour' => 'array',
    ];

    public function Pharmacie(): BelongsTo
    {
        return $this->belongsTo(Pharmacie::class);
    }
}
