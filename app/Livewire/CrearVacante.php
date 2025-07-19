<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;
    use WithFileUploads;

    protected $rules = [
        "titulo" => "required|string|max:100",
        "salario" => "required|numeric",
        "categoria" => "required|string",
        "empresa" => "required|string",
        "ultimo_dia" => "required|date",
        "descripcion" => "required|string|max:250",
        "imagen" => "required|image|mimes:jpeg,png,jpg"
    ];
    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.crear-vacante', [
            "salarios" => $salarios,
            "categorias" => $categorias
        ]);
    }

    public function crearVacante()
    {
        $vacante = $this->validate();
        //Save imagen
        $imagen = $this->imagen->store("public/vacantes");
        $nombreImagen = str_replace("public/vacantes/", "", $imagen);
        //Save vacante
        Vacante::create([
            "titulo" => $vacante["titulo"],
            "salario_id" => $vacante["salario"],
            "categoria_id" => $vacante["categoria"],
            "empresa" => $vacante["empresa"],
            "ultimo_dia" => $vacante["ultimo_dia"],
            "descripcion" => $vacante["descripcion"],
            "imagen" => $nombreImagen,
            "user_id" => auth()->id()
        ]);
        return $this->redirect("/dashboard");
    }
}
