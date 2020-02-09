<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PluginVersion extends Model
{
    protected $fillable = ['plugin_name', 'version', 'update_description'];

    public function plugin() {
        return $this->belongsTo('App\Plugin', 'plugin_name');
    }
}
