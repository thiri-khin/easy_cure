<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Degree;
use App\Specialization;

class Doctor extends Model
{
    Protected $fillable=['user_id','speciality_id','phone','doctorfee','address'];

   public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function degrees()
    {
        return $this->belongsToMany('App\Degree')->withTimestamps();;
    }

    public function speciality()
    {
        return $this->belongsTo('App\Specialization');
    }

}
