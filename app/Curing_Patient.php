<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Room;

class Curing_Patient extends Model
{
    protected $fillable=['patient_id','room_id','blood_type','gurdian','start_date','end_date'];

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function room()
    {
        return $this->belongsTo('App\Room','room_id');
    }
}
