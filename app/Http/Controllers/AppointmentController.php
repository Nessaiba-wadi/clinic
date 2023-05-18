<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function handleAppointment(Request $request)
    {
        $request->validate([
            'specialty_id' => 'required',
            'doctor_id' => 'required',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
            'reason' => 'required', // validate the reason field
            // You may need to add more validation rules here, based on your requirements
        ]);

        $datetime = Carbon::createFromFormat(
            'Y-m-d H:i',
            $request->appointment_date . ' ' . $request->appointment_time
        );


        // Create a new Appointment instance and set its properties
        $appointment = new Appointment;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->patient_id = auth()->user()->id; // Assuming that you want to save the user's ID
        $appointment->appointment_time = $datetime; // Save the combined datetime
        $appointment->reason = $request->reason;

        // Save the appointment
        $appointment->save();

        // Redirect the user to a success page, or show a success message
        return response()->json(['success' => 'Appointment successfully booked.']);
    }

    public function GetList()
    {
        // Assuming 'user_id' is the correct column in your appointments table
        $appointments = Appointment::where('patient_id', auth()->user()->id)
            ->with('doctor')
            ->orderBy('appointment_time', 'desc')
            ->get();

        return view('user.appointments.list', compact('appointments'));
    }

    public function GetUpcomingAppointments()
    {
        $today = now();
        $appointments = Appointment::where('patient_id', auth()->user()->id)
            ->where('status', 1)
            ->whereDate('appointment_time', '>', $today)
            ->with('doctor')
            ->orderBy('appointment_time', 'desc')
            ->get();

        return view('user.appointments.upcoming', compact('appointments'));
    }

    public function GetPassedAppointments()
    {
        $today = now();
        $appointments = Appointment::where('patient_id', auth()->user()->id)
            ->where('status', 1)
            ->whereDate('appointment_time', '<', $today)
            ->with('doctor')
            ->orderBy('appointment_time', 'desc')
            ->get();

        return view('user.appointments.upcoming', compact('appointments'));
    }


}
