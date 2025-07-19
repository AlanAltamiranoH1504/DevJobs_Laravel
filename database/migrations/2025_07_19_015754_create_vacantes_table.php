<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 100);
            $table->foreignId("salario_id")->constrained("salarios")->onDelete("cascade");
            $table->foreignId("categoria_id")->constrained("categorias")->onDelete("cascade");
            $table->string("empresa");
            $table->date("ultimo_dia");
            $table->string("descripcion", 250);
            $table->string("imagen");
            $table->integer("publicado")->default(1);
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacantes');
    }
};
