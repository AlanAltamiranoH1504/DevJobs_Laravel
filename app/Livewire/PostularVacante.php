<?php

namespace App\Livewire;

use App\Models\Candidato;
use App\Models\Vacante;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class PostularVacante extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacante;
    protected $rules = [
        "cv" => "required|mimes:pdf"
    ];

    public function mount(Vacante $vacante)
    {
//        dd($vacante);
    }

    public function postularme()
    {
        $datos = $this->validate();
        //Almacen de cv en disco duro
        $name_file_cv = Str::uuid(). "." . $datos["cv"]->extension();
        $path_cv = $datos["cv"]->storeAs("cv", $name_file_cv, "public");
        $url_storage_cv = Storage::url($path_cv);
        //Crear la vacante
        $vacante = Candidato::create([
            "user_id" => auth()->user()->id,
            "vacante_id" => $this->vacante->id,
            "cv" => $url_storage_cv
        ]);
        return redirect("/");

        //Envio de emial
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
