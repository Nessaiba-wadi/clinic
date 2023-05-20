<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function specialities()
    {
        $specialities = Specialty::all();
        return view('admin.specialities', ['specialities' => $specialities]);
    }



    public function doctors()
    {
        $doctors = Doctor::all();
        return view('admin.doctors', ['doctors' => $doctors]);
    }

    public function patients()
    {
        $patients = Patient::all();
        return view('admin.patients', ['patients' => $patients]);
    }

    public function appointments()
    {
        $appointments = Appointment::whereIn('status', [0, 1])->orderBy('appointment_time', 'desc')->get();
        return view('admin.appointments', ['appointments' => $appointments]);
    }

    public function cancelAppointment(Appointment $appointment)
    {
        $appointment->status = -1;
        $appointment->save();

        return redirect()->route('admin.appointments');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function editSpeciality(Specialty $speciality)
    {
        return view('admin.specialities.edit', compact('speciality'));
    }

    public function updateSpeciality(Request $request, Specialty $speciality)
    {
        $validatedData = $request->validate([
            'specialty_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $speciality->update($validatedData);

        return redirect()->route('admin.specialities');
    }

    public function editDoctor(Doctor $doctor)
    {
        $specialities = Specialty::all();
        return view('admin.doctors.edit', compact('doctor', 'specialities'));
    }

    public function addDoctor(Doctor $doctor)
    {
        $specialities = Specialty::all();
        return view('admin.doctors.new', compact( 'specialities'));
    }

    public function showAddSpecialtyForm()
    {
        return view('admin.specialities.new');
    }

    public function addspeciality(Request $request)
    {
        $request->validate([
            'specialty_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['specialty_name', 'description']);

        $specialty = Specialty::create($data);

        return redirect()->route('admin.specialities')->with('status', 'Specialty added successfully');
    }
    public function deleteDoctor(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctors');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users');
    }

    public function updateDoctor(Request $request, Doctor $doctor)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'phone_number' => 'nullable|string',
            'address' => 'nullable|string',
            'qualification' => 'nullable|string',
            'years_of_experience' => 'nullable|integer',
            'bio' => 'nullable|string',
            'picture_profile' => 'nullable|file|mimes:jpg,jpeg,png',
            'specialties' => 'nullable|array',
            'specialties.*' => 'exists:specialties,id',
        ]);

        $data = $request->only([
            'first_name', 'last_name', 'gender', 'date_of_birth', 'phone_number',
            'address', 'qualification', 'years_of_experience', 'bio'
        ]);

        if ($request->hasFile('picture_profile')) {
            $path = $request->file('picture_profile')->store('profile_pictures', 'public');
            $data['picture_profile'] = $path;

            // Delete the old profile picture if it exists
            if ($doctor->picture_profile) {
                Storage::disk('public')->delete($doctor->picture_profile);
            }
        }

        $doctor->update($data);

        if ($request->filled('specialties')) {
            $doctor->specialties()->sync($request->input('specialties'));
        }


        return redirect()->route('doctors.edit', $doctor)->with('status', 'Doctor updated successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            // User validation
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            // Doctor validation
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'phone_number' => 'nullable|string',
            'address' => 'nullable|string',
            'qualification' => 'nullable|string',
            'years_of_experience' => 'nullable|integer',
            'bio' => 'nullable|string',
            'picture_profile' => 'nullable|file|mimes:jpg,jpeg,png',
            'specialties' => 'nullable|array',
            'specialties.*' => 'exists:specialties,id',
        ]);

        // Create user first
        $user = User::create([
            'username' => $request->first_name.''.$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Hash the password before storing
            'role' => 'doctor',
        ]);

        // Set the user_id in the $data array
        $data = $request->only([
            'first_name',
            'last_name',
            'gender',
            'date_of_birth',
            'phone_number',
            'address',
            'qualification',
            'years_of_experience',
            'bio',
            'picture_profile',
            'specialties',
            'specialties.*'
        ]);

        $data['user_id'] = $user->id;

        if ($request->hasFile('picture_profile')) {
            $path = $request->file('picture_profile')->store('profile_pictures', 'public');
            $data['picture_profile'] = $path;
        }

        $doctor = Doctor::create($data);

        if ($request->filled('specialties')) {
            $doctor->specialties()->sync($request->input('specialties'));
        }

        return redirect()->route('admin.doctors')->with('status', 'Doctor added successfully');
    }


    public function deleteSpeciality(Specialty $speciality)
    {
        $speciality->delete();
        return redirect()->route('admin.specialities');
    }

    public function acceptAppointment(Appointment $appointment)
    {
        // Logic to accept an appointment goes here
        // Maybe something like:
        $appointment->status = 1;
        $appointment->save();

        return redirect()->route('admin.appointments');
    }

    public function declineAppointment(Appointment $appointment)
    {
        // Logic to decline an appointment goes here
        // Maybe something like:
        $appointment->status = -1;
        $appointment->save();

        return redirect()->route('admin.appointments');
    }

}
