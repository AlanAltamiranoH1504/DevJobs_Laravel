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

    //Un vacante pertenece a una categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, "categoria_id", "id");
    }

    //Una vacante pertenece a un salario
    public function salario()
    {
        return $this->belongsTo(Salario::class, "salario_id", "id");
    }
}
