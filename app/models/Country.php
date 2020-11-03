<?php

namespace App\Models;

use App\Models\DoctorProfile;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'countries';

    protected $filable = ['currency'];

    protected $with = ['translations'];

    protected $translatedAttributes = ['name'];

    public function doctorProfile()
    {
        return $this->belongsTo(DoctorProfile::class, 'country_id');
    }

}
