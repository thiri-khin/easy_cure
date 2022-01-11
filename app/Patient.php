<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curing_Patient;

class Patient extends Model
{	protected $fillable=['name',
						'phone',
						'address',
						'remark',
						'cured_date',
						'gender',
						'age','patient_hospital'];

	public function curingpatient()
    {
        return $this->hasOne('App\Curing_Patient');
    }

    public function room()
    {
        return $this->belongsTo('App\Room','room_id');
    }
}
