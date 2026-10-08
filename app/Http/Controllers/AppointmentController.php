<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index() {
        $appointments = Appointment::with([
            'patient',
            'doctor'
        ]);

        return view('appointments.index', compact('appointments'));
    }
}
