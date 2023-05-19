<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function list()
    {
        $user = Auth::user();
        $doctors = $user->favorites;

        return view('user.favorites', compact('doctors'));
    }

    public function unfavorite(Doctor $doctor)
    {
        $user = Auth::user();
        $user->favorites()->detach($doctor->id);

        return response()->json(['success' => true]);
    }

}

