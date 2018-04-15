<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupPaymentMethod extends Model
{
    protected $table = 'lookup_payment_methods';

    // realtionship
    // belongs to
    public function payment() { return $this->belongsTo('App\Payment'); }
}
