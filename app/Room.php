<?php

namespace App;
use App\Curing_Patient;
use App\Patient;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['type','room_no','price'];

    public function curingpatient()
    {
        return $this->hasOne('App\Curing_Patient','room_id');
    }

    public function patient()
    {
        return $this->hasOne('App\Patient','room_id');
    }

}
