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

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function countries()
    {
        return $this->belongsTo(Country::class);
    }

    public function specialties()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

}
