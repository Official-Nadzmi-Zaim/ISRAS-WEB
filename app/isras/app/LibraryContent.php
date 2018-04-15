<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibraryContent extends Model
{
    protected $table = 'library_contents';

    // relationship
    // has
    public function admin_library_content() { return $this->hasMany('App\AdminLibraryContent'); }
    // lookup
    public function lookup_publication() { return $this->hasOne('App\LookupPublication'); }
    public function lookup_author() { return $this->hasOne('App\LookupAuthor'); }
}
