<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupCountry extends Model
{
    protected $table = 'lookup_countries';

    // relationship
    // belongs to
    public function address() { return $this->belongsTo('App\Address'); }
}
