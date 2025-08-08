<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidatos';
    protected $primaryKey = 'id';
    protected $hidden = ["created_at", "updated_at"];
    protected $fillable = [
        "user_id",
        "vacante_id",
        "cv"
    ];

    //Un candidato pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
