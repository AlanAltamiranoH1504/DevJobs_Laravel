<?php

namespace App\Http\Controllers;

use App\Notifications\NuevoCandidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificacionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Limpieza de notificaciones

        $notificaciones = Auth::user()->unreadNotifications;
        Auth::user()->unreadNotifications->markAsRead();
        return view("notificaciones.show", [
            "notificaciones" => $notificaciones
        ]);
    }
}
