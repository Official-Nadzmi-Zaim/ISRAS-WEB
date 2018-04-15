<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupBank extends Model
{
    protected $table = 'lookup_banks';

    // relationship
    // belongs to
    public function payment() { return $this->belongsTo('App\Payment'); }
}
