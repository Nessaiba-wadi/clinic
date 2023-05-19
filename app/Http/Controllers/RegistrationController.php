<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'email' => 'required|email|unique:users',
            'phoneNumber' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'adresse' => 'required',
            'password' => 'required|confirmed',
        ]);


        $user = new User;
        $user->username = $request->FirstName.''.$request->LastName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'patient';
        $user->save();

        $patient = new Patient;
        $patient->user_id = $user->id;
        $patient->first_name = $request->FirstName;
        $patient->last_name = $request->LastName;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->gender = $request->gender;
        $patient->address = $request->adresse;
        $patient->phone_number = $request->phoneNumber;
        $patient->save();

        return redirect('/login')->with('status', 'Successfully Registered! You can now login.');
    }
}
