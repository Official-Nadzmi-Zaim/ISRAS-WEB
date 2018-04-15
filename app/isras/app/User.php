<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
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

    // relationship
    // has
    public function company() { return $this->hasOne('App\Company'); }
    public function payment() { return $this->hasMany('App\Payment'); }
    public function feedback() { return $this->hasMany('App\Feedback'); }
    public function assessment() { return $this->hasMany('App\Assessment'); }
}
