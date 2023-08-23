<?php

namespace App\Models;

use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisanale extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'categorie',
        'collection',
        'etat',
        'photo',
        'statut',
        'users_id',
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
