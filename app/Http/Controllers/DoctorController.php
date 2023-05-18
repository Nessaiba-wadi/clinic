<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $doctors = Doctor::with(['specialties', 'favorites' => function ($query) use ($user) {
            $query->where('patient_id', $user->id);
        }])->get();

        return view('doctors', compact('doctors'));
    }

    // DoctorController.php

    public function toggleFavorite(Doctor $doctor)
    {
        $user = auth()->user();

        if ($user->favorites()->where('doctor_id', $doctor->id)->exists()) {
            $user->favorites()->detach($doctor->id);
            return response()->json(['status' => 'removed']);
        } else {
            $user->favorites()->attach($doctor->id);
            return response()->json(['status' => 'added']);
        }
    }

    public function showBySpecialty($id)
    {
        $doctors = Doctor::whereHas('specialties', function ($query) use ($id) {
            $query->where('specialties.id', $id);
        })->get();
        return view('doctors', compact('doctors'));
    }

    public function getDoctorsBySpecialty($specialty)
    {
        $doctors = Doctor::whereHas('specialties', function ($query) use ($specialty) {
            $query->where('specialty_id', $specialty);
        })->with('user')->get();

        return response()->json($doctors);
    }


    public function show(Doctor $doctor)
    {
        return view('doctor-details', compact('doctor'));
    }




}
