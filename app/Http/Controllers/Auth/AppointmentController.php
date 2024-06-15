<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Lakukan validasi request di sini jika diperlukan

        // Simpan informasi appointment ke database
        Appointment::create([
            'psychologist_id' => $request->psychologist_id,
            'patient_id' => $request->patient_id,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            // tambahkan informasi lain yang diperlukan
        ]);

        // Berikan respons sesuai kebutuhan aplikasi Anda
        return response()->json(['message' => 'Appointment created successfully'], 201);
    }

    public function show($userId)
    {
        // Dapatkan semua appointment berdasarkan ID psikolog atau pasien
        $appointments = Appointment::where('psychologist_id', $userId)->orWhere('patient_id', $userId)->get();

        // Berikan respons dengan data appointment
        return response()->json($appointments, 200);
    }
}
