<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ["categoria"];

    //Una categoria puede pertenecer a muchas vacantes
    public function vacantes()
    {
        return $this->hasMany(Vacante::class, "categoria_id", "id");
    }
}
