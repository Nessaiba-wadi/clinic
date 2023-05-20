<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'specialty_id',
        'doctor_id',
        'user_id',
        'phone',
        'appointment_date',
        'appointment_time',
        'special_request',
    ];


    public function doctorUser() {
        return $this->hasOneThrough(
            User::class,
            Doctor::class,
            'id', // Foreign key on the doctors table...
            'id', // Foreign key on the users table...
            'doctor_id', // Local key on the appointments table...
            'user_id' // Local key on the doctors table...
        );
    }

    public function patientUser() {
        return $this->hasOneThrough(
            User::class,
            Patient::class,
            'id', // Foreign key on the patients table...
            'id', // Foreign key on the users table...
            'patient_id', // Local key on the appointments table...
            'user_id' // Local key on the patients table...
        );
    }

    public function specialty() {
        return $this->belongsTo(Specialty::class);
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
