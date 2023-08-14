<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionArtisanale extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_acteur',
        'id_promotion',
        'date_debut',
        'date_fin',
        'description',
    ];
    public function acteur()
    {
        return $this->belongsTo(Acteur::class, 'id_acteur');
    }
    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'id_promotion');
    }

}
