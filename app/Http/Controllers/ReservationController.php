<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;
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
        
        Reservation::create([
            'nombre_sala' => $request->input('nombre_sala'),
            'reservation_date' => $request->input('reservation_date'),
        'email' => $request->input('email'),
        'acomodo' => $request->input('acomodo'), // Esto almacenará la opción seleccionada en el checkbox
        'reservation_message' => $request->input('reservation_message'),
            'status' => 1, // Estado "sin responder"
            
        ]);
        return redirect()->route('user.reservation')->with('success', 'Reserva realizada con éxito');
    }

    public function rafapina() {
        $userEmail = Auth::user()->email;
        
        return view('rafapinaSchedule' , ['email' => $userEmail]);
    }
    public function exdirectores() {
        $userEmail = Auth::user()->email;
        return view('exdirectoresSchedule' , ['email' => $userEmail]);
    }
    public function auditorio() {
        return view('auditorioSchedule');
    }


    public function reservationSuccessful()
    {
        return view('successReservation');
    }

}

