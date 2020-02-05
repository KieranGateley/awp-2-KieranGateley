<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public function owner() {
        return $this->belongsTo('App\User');
    }
}
