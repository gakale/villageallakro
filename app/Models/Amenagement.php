<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Amenagement extends Model
{
    use HasFactory;
    //

    protected $fillable = [
        'id_amenagement',
        'id_acteur',
        'info',
    ];
    public function acteur()
    {
        return $this->belongsTo(Acteur::class, 'id_acteur');
    }
}
