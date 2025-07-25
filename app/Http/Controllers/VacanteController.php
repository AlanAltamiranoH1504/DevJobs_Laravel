<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class VacanteController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("vacantes.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("vacantes.create");
    }


    /**
     * Display the specified resource.
     */
    public function show(Vacante $vacante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($vacante)
    {
        $vacante = Vacante::findOrFail($vacante);
        $this->authorize("update", $vacante);
//        $vacante = Vacante::where([
//            "id" => $vacante,
//            "user_id" => auth()->user()->id
//        ])->first();
        return view("vacantes.edit", [
            "vacante" => $vacante
        ]);
    }
}
