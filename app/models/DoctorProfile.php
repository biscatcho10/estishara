<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Country;
use App\Models\specialty;
use Illuminate\Database\Eloquent\Model;

class DoctorProfile extends Model
{

    protected $table = "doctor_profiles";

    protected $fillable = [
        'phone',
        'gender',
        'image',
        'documents',
        'doctor_status',
        'is_active',
        'ex_type',
        'national_id',
        'fees',
        'doctor_id',
        'country_id',
        'specialty_id',
    ];

    protected $with = ['translations'];

    protected $translatedAttributes = ['bio'];

    public function profile()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function country()
    {
        return $this->hasOne(Country::class ,'country_id');
    }

    public function specialty()
    {
        return $this->hasOne(Specialty::class ,'specialty_id');
    }

}
