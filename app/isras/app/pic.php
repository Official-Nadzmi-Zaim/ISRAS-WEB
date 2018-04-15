<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PIC extends Model
{
    protected $table = 'pics';

    // relationship
    // belongs to
    public function company() { return $this->belongsTo('App\Company'); }
}
