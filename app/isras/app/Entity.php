<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Entity extends Authenticatable
{
    protected $table = 'entities';
    
    // relationship
    // has
    public function user() { return $this->hasOne('App\User', 'entity_id'); }
    public function admin() { return $this->hasOne('App\Admin', 'entity_id'); }

    // lookup
    public function lookup_entity_type() { return $this->hasOne('App\LookupEntityType'); }
}
