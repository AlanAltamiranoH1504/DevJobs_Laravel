<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;

class EditarVacante extends Component
{
    public $vacante_id;
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    protected $rules = [
        "titulo" => "required|string|max:100",
        "salario" => "required|numeric",
        "categoria" => "required",
        "empresa" => "required|string",
        "ultimo_dia" => "required|date",
        "descripcion" => "required|string|max:250",
//        "imagen" => "image|mimes:jpeg,png,jpg"
    ];

    public function mount(Vacante $vacante)
    {
        $this->vacante_id = $vacante->id;
        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        $this->empresa = $vacante->empresa;
        $this->ultimo_dia = $vacante->ultimo_dia;
        $this->descripcion = $vacante->descripcion;
        $this->imagen = $vacante->imagen;
    }

    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.editar-vacante', [
            "salarios" => $salarios,
            "categorias" => $categorias
        ]);
    }

    public function actualizarVacante()
    {
        $validate_data = $this->validate();

        $vacante = Vacante::where([
            "id" => $this->vacante_id
        ])->first();
        $vacante->update([
            "titulo" => $validate_data["titulo"],
            "salario_id" => $validate_data["salario"],
            "categoria_id" => $validate_data["categoria"],
            "empresa" => $validate_data["empresa"],
            "ultimo_dia" => $validate_data["ultimo_dia"],
            "descripcion" => $validate_data["descripcion"]
        ]);
        return $this->redirect("/dashboard");
    }
}
