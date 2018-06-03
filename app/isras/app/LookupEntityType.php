<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupEntityType extends Model
{
    protected $table = 'lookup_entity_types';

    // relationship
    // belongs to
    public function entity() { return $this->belongsTo('App\Entity'); }
}
