<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarVacantes extends Component
{
    use WithPagination;
    protected $listeners = ["prueba"];
    public function prueba($id)
    {
        $vacante = Vacante::where([
            "id" => $id,
            "user_id" => auth()->user()->id
        ])->first();

        $this->authorize("delete", $vacante);
        $vacante->delete();
        return $this->redirect("/dashboard");
    }
    public function render()
    {
        $vacantes = Vacante::where("user_id", auth()->user()->id)->paginate(2);
        return view('livewire.mostrar-vacantes', [
            "vacantes" => $vacantes
        ]);
    }
}
