<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Candidato extends Model
{
    //
    protected $fillable = [

        'apellido_candidato',
        'nombre_candidato',
        'partido_candidato',
    ];

    public function votos(): HasMany
    {
        return $this->hasMany(voto::class);
    }
}
