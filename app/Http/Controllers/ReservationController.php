<?php

namespace App\Http\Controllers;

class ReservationController extends Controller {
    public function rafapina() {
        return view('rafapinaSchedule');
    }
    public function exdirectores() {
        return view('exdirectoresSchedule');
    }
    public function auditorio() {
        return view('auditorioSchedule');
    }
}

