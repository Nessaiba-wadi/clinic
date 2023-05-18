<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialitiesController extends Controller
{
    public function index()
    {
        $Specialty = Specialty::all();
        return view('specialties', compact('Specialty'));
    }

    public function GetSpeciality()
    {
        $specialties = Specialty::all();
        return view('user.appointments.index', compact('specialties'));
    }
}
