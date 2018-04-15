<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    // relationship
    // belongs to
    public function company() { return $this->belongsTo('App\Company'); }
    // has
    public function lookup_country() { return $this->hasONe('App\LookupCountry'); }
}
