<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index() {
        $doctor = Auth::user()->psychologist;

        $scheduledAppointments = Appointment::where('psychologist_id', $doctor->id)
            ->where('status', 'scheduled')
            ->with('patient.user')
            ->orderBy('date')
            ->orderBy('start_time')
            ->get();

        $finishedAppointments = Appointment::where('psychologist_id', $doctor->id)
            ->where('status', 'completed')
            ->with('patient.user')
            ->orderBy('date', 'desc')
            ->orderBy('start_time', 'desc')
            ->get();

        return view('psychologist.appointments.index', compact('scheduledAppointments', 'finishedAppointments'));
    }

    public function show($id) {
        $appointment = Appointment::where('psychologist_id', Auth::user()->psychologist->id)
            ->with('patient.user')
            ->findOrFail($id);

        $questions = Question::with(['questionAnswers' => function ($q) use ($appointment) {
            $q->where('user_id', $appointment->patient->user->id);
        }])->get();

        return view('psychologist.appointments.detail', compact('appointment', 'questions'));
    }

    public function setComplete($id, Request $request) {
    $appointment = Appointment::where('psychologist_id', Auth::user()->psychologist->id)->findOrFail($id);

        $appointment->update([
            'status' => 'completed',
            'note' => $request->note
        ]);

        return redirect()->back();
    }
}
