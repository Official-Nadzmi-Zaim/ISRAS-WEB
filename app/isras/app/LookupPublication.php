<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupPublication extends Model
{
    protected $table = 'lookup_publications';

    // relationship
    // belongs to
    public function library_content() { return $this->belongsTo('App\LibraryContent'); }
}
