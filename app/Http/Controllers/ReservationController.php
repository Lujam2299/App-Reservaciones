<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller {

    public function store(Request $request)
    {
        $request->validate([
            'nombre_sala' => ['required', 'string'],
            'reservation_date' => ['required', 'date'],
            'email' => ['required', 'email'],
            'acomodo' => ['required', 'string'],
            'reservation_message' => ['nullable', 'string'],
        ]);
        $userEmail = Auth::user()->email;
        dd($email);
        Reservation::create([
            'nombre_sala' => $request->input('nombre_sala'),
        'fecha' => $request->input('reservation_date'),
        'correo' => $request->input('email'),
        'acomodo' => $request->input('acomodo'), // Esto almacenará la opción seleccionada en el checkbox
        'especificaciones' => $request->input('reservation_message'),
            'status' => 1, // Estado "sin responder"
            
        ]);
        return redirect()->route('nombre_de_la_ruta');
    }

    public function rafapina() {
        $email = Auth::user()->email;
        return view('rafapinaSchedule' , ['email' => $email]);
    }
    public function exdirectores() {
        return view('exdirectoresSchedule');
    }
    public function auditorio() {
        return view('auditorioSchedule');
    }
}

