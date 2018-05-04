<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LookupAuthor extends Model
{
    protected $table = 'lookup_authors';
    // relationship
    // belongs to
    public function library_content() { return $this->belongsTo('App\LibraryContent'); }
}
