<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Specialization;

class Specialization extends Model
{
    Protected $fillable=['speciality','profile'];

    public function doctors()
    {
        return $this->hasMany('App\Doctor');
    }

    public function users()
    {
        return $this->hasMany('App\Specialization');
    }
}
