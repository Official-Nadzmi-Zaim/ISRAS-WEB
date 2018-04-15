<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    // relationship
    // belongs to
    public function user() { return $this->belongsTo('App\User'); }
    // has
    public function pic() { return $this->hasOne('App\PIC'); }
    public function address() { return $this->hasMany('App\Address'); }
}
