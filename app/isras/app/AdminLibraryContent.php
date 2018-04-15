<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminLibraryContent extends Model
{
    protected $table = 'admin_library_contents';

    // relationship
    // belongs to
    public function admin() { return $this->belongsTo('App\Admin'); }
    public function library_content() { return $this->belongsTo('App\LibraryContent'); }
}
