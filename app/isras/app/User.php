<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    protected $table = 'users';
    
    // belongs to
    public function entity() { return $this->belongsTo('App\Entity'); }

    // relationship
    // has
    public function company() { return $this->hasOne('App\Company'); }
    public function payment() { return $this->hasMany('App\Payment'); }
    public function feedback() { return $this->hasMany('App\Feedback'); }
    public function assessment() { return $this->hasMany('App\Assessment'); }
}
