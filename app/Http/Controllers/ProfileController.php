<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $patient = $user->patient;

        $validator = Validator::make($request->all(), [
            'FirstName' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', 'numeric'],
            'Birth_date' => ['required', 'date'],
            'gender' => ['required', Rule::in(['H', 'F'])],
            'adresse' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        // updating the user's patient information
        $patient->first_name = $request->FirstName;
        $patient->last_name = $request->LastName;
        $patient->phone_number = $request->phoneNumber;
        $patient->date_of_birth = $request->Birth_date;
        $patient->gender = $request->gender;
        $patient->address = $request->adresse;
        $patient->save();

        // redirect back to the form with a success message
        return redirect()->back()->with('message', 'Profile updated successfully.');
    }
}
