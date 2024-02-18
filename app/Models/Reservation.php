<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_sala', 'reservation_date', 'email', 'acomodo', 'reservation_message', 'status'];
}