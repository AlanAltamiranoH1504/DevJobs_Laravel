<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class HomeVacantes extends Component
{
    public $termino;
    public $salario;
    public $categoria;
    protected $listeners = ['terminosBusqueda' => "buscar"];

    public function buscar($termino, $categoria, $salario)
    {
        $this->termino = $termino;
        $this->categoria = $categoria;
        $this->salario = $salario;
    }

    public function render()
    {
        $vacantes = Vacante::when($this->termino, function ($query) {
            $query->where("titulo", "like", "%" . $this->termino . "%");
        })->when($this->salario, function ($query) {
            $query->where("salario_id", "=", $this->salario);
        })->when($this->categoria, function ($query) {
            $query->where("categoria_id", "=", $this->categoria);
        })->get();

        return view('livewire.home-vacantes', [
            "vacantes" => $vacantes
        ]);
    }
}
