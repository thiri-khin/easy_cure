<?php

namespace App;
use App\Appointment;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	Protected $fillable=['user_id','day','start_time','end_time'];

	public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
