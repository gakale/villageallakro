<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\ServiceSante;
use App\Models\Pharmacie;
use Illuminate\Database\Eloquent\Relations\HasMany;
class CentreSante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
        'description',
   ];

    public function ServiceSante(): belongsToMany
    {
        return $this->belongsToMany(ServiceSante::class, 'services_centres');
    }

    public function pharmacie():hasMany
    {
        return $this->hasMany(Pharmacie::class);
    }
}
