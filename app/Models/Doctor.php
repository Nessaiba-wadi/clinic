<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{

    protected $fillable = [
        'user_id',
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
    ];

    use HasFactory;
    use SoftDeletes;

    // Other model methods and properties go here

    public function specialties() {
        return $this->belongsToMany(Specialty::class, 'doctor_specialty');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites', 'doctor_id', 'patient_id');
    }


    public function isFavoritedBy(User $user)
    {
        return $this->favorites()->where('patient_id', $user->id)->exists();
    }






}
