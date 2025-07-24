<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    protected $table = "vacantes";
    protected $casts = ["ultimo_dia"];
    protected $fillable = [
        "titulo",
        "salario_id",
        "categoria_id",
        "empresa",
        "ultimo_dia",
        "descripcion",
        "imagen",
        "publicado",
        "user_id"
    ];
}
