<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public function plugins() {
        return $this->hasMany('App\Plugin');
    }

    public function owner() {
        return $this->belongsTo('App\User');
    }
}
