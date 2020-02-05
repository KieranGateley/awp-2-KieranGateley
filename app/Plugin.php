<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{

    public function versions() {
        return $this->hasMany('App\PluginVersion');
    }
}
