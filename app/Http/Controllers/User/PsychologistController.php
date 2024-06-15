<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Psychologist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PsychologistController extends Controller
{
    public function index()
    {
        $doctors = Psychologist::has('user')
            ->with('user')
            ->with([
                'availabilities' => function ($q) {
                    $q->where('date', '>=', date('Y-m-d'))->orderBy('date')->orderBy('start_time')->limit(5);
                },
            ])
            ->get();

        return view('patient.psychologists.index', compact('doctors'));
    }

    public function show($id)
    {
        $doctor = Psychologist::has('user')
            ->with('user')
            ->with([
                'availabilities' => function ($q) {
                    $q->where('date', '>=', date('Y-m-d'))->orderBy('date')->orderBy('start_time');
                },
            ])
            ->findOrFail($id);

        $scheduledAppointment = Appointment::where('patient_id', Auth::user()->patient->id)
            ->where('psychologist_id', $doctor->id)
            ->where('status', 'scheduled')
            ->first();

        $finishedAppointments = Appointment::where('patient_id', Auth::user()->patient->id)
            ->where('psychologist_id', $doctor->id)
            ->where('status', 'completed')
            ->get();

        return view('patient.psychologists.detail', compact('doctor', 'scheduledAppointment', 'finishedAppointments'));
    }

    public function store($id, Request $request)
    {
        $request->validate(['appointment' => 'required']);
        
        $doctor = Psychologist::has('user')->findOrFail($id);
        $available = $doctor->availabilities()->findOrFail($request->appointment);
        
        Appointment::create([
            'patient_id' => Auth::user()->patient->id,
            'psychologist_id' => $doctor->id,
            'date' => $available->date,
            'start_time' => $available->start_time,
            'end_time' => $available->end_time,
            'status' => 'scheduled',
        ]);
        
        return redirect()->back();
    }
}
