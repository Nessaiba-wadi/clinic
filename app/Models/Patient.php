<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function favorites()
    {
        return $this->belongsToMany(Doctor::class, 'favorites', 'patient_id', 'doctor_id');
    }
}
