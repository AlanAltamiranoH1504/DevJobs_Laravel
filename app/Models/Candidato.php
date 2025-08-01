<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidatos';
    protected $primaryKey = 'id';
    protected $fillable = [
        "user_id",
        "vacante_id",
        "cv"
    ];
}
