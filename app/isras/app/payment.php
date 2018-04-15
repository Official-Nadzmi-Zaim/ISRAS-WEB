<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    // relationship
    // belongs to
    public function company() { return $this->belongsTo('App\Company'); }
    // lookup
    public function lookup_payment_method() { return $this->hasOne('App\LookupPaymentMethod'); }
    public function lookup_bank() { return $this->hasOne('App\LookupBank'); }
}
