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

    public function specialty() {
        return $this->belongsTo(Specialty::class);
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
