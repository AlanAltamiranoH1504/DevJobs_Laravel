<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salario extends Model
{
    protected $table = "salarios";
    protected $fillable = ["salario"];

    //Un salario puede pertenece a varias vacantes
    public function vacantes()
    {
        return $this->hasMany(Vacante::class, "salario_id", "id");
    }
}
