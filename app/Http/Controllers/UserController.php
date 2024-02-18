<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Reservation;

class UserController extends Controller
{
    public function configuration()
    {
        return view('userConfiguration');
    }
    public function showsolicitudes() {
        
        $usuario = Auth::user();

    // Obtener las reservaciones del usuario actual
    $reservaciones = Reservation::where('email', $usuario->email)->get();

    return view('userSolicitudes', ['reservaciones' => $reservaciones]);
    }
}
