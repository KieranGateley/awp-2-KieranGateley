<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PluginVersion extends Model
{
    protected $fillable = ['plugin_name', 'version', 'description', 'download_link'];

    public function plugin() {
        return $this->belongsTo('App\Plugin', 'plugin_name');
    }
}
