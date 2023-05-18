<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function toggle(Doctor $doctor)
    {
        $user = auth()->user();

        if($user->favorites()->where('doctor_id', $doctor->id)->exists()) {
            $user->favorites()->detach($doctor->id);
            return response()->json(['status' => 'removed']);
        } else {
            $user->favorites()->attach($doctor->id);
            return response()->json(['status' => 'added']);
        }
    }
}

