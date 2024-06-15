<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PsychologistController extends Controller
{
    public function dashboard() {
        return view('psychologist.psychologist-dashboard');
    }

    public function myPatient() {
        return view('psychologist.psychologist-patients');
    }

    public function profile() {
        $user = Auth::user();
        return view('psychologist.psychologist-profile', compact("user"));
    }
}
