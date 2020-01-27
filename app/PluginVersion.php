<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PluginVersion extends Model
{

    public function plugin() {
        return $this->belongsTo('App\Plugin');
    }
}
