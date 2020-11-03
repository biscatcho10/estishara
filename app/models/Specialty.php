<?php

namespace App\Models;


use App\Models\DoctorProfile;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = "specialties";

    protected $filable = ['id'];

    protected $with = ['translations'];

    protected $translatedAttributes = ['name'];

    public function doctorProfile()
    {
        return $this->belongsTo(DoctorProfile::class, 'specialty_id');
    }
}
