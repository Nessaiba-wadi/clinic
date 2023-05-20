<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialty extends Model
{
    protected $fillable = [
        'specialty_name',
        'description',
    ];

    use HasFactory;
    use SoftDeletes;

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_specialty');
    }

}
