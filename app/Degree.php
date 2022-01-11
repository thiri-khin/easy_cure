<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\User;

class Degree extends Model
{
    Protected $fillable=['degree'];

    public function doctors()
    {
        return $this->belongsToMany('App\Doctor');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
