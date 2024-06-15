<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PsychologistAvailability;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PsychologistAvailabilityController extends Controller
{
    public function index()
    {
        $availables = PsychologistAvailability::where('psychologist_id', Auth::user()->psychologist->id)->orderBy('date', 'desc')->orderBy('start_time', 'desc')->get();

        return view('psychologist.psychologist-availability', compact('availables'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dateAvailable' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
        ]);

        if (substr($request->endTime, 0, 2) <= substr($request->startTime, 0, 2) && substr($request->endTime, -1, 2) <= substr($request->startTime, -1, 2)) {
            return redirect()->back();
        }

        $date = \DateTime::createFromFormat('d/m/Y', $request->dateAvailable)->format('Y-m-d');

        PsychologistAvailability::create([
            'psychologist_id' => Auth::user()->psychologist->id,
            'date' => $date,
            'start_time' => $request->startTime . ":00",
            'end_time' => $request->endTime . ":00",
            'available' => true,
        ]);

        return redirect()->back();
    }

    public function show($psychologistId)
    {
        // Dapatkan semua jadwal ketersediaan psikolog berdasarkan ID psikolog
        $availabilities = PsychologistAvailability::where('psychologist_id', $psychologistId)->get();

        // Berikan respons dengan data jadwal ketersediaan psikolog
        return response()->json($availabilities, 200);
    }
}
