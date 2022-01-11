<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Schedule;
use App\Doctor;
use App\Degree;
use App\Specialization;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   /* public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }

    public function doctors()
    {
        return $this->hasMany('App\Doctor');
    }*/

    public function degree()
    {
        return $this->belongsToMany('App\Degree');
    }

    public function speciality()
    {
        return $this->belongsTo('App\Specialization');
    }

}
