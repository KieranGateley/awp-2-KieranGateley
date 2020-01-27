<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{


    public function server() {
        return $this->belongsTo('App\Server');
    }

    public function versions() {
        return $this->hasMany('App\PluginVersion');
    }
}
