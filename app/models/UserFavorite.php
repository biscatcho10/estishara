<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{

    protected $table = "user_favorites";

    protected $filable = ['user_id', 'doctor_id'];

}
