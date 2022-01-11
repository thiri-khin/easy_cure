<?php

namespace App;
use App\Schedule;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    Protected $fillable=['name','schedule_id','phone','address','patient_situation'];

    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
}
