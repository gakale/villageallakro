<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ServiceSante;
use App\Models\Pharmacie;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        'id_service_sante',
   ];

    public function servicesante(): HasMany
    {
        return $this->hasMany(ServiceSante::class, 'id_service_sante');
    }


    public function pharmacie():hasMany
    {
        return $this->hasMany(Pharmacie::class);
    }
}
