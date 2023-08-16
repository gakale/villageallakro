<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\CentreSante;

class ServiceSante extends Model
{
    use HasFactory;

protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
        'description',
    ];

    public function CentreSante(): belongsToMany
    {
        return $this->belongsToMany(CentreSante::class, 'services_centres');
    }
}
