<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['name', 'description', 'authors', 'website', 'spigot_id', 'dependencies', 'soft_dependencies'];

    public function versions() {
        return $this->hasMany('App\PluginVersion', 'plugin_name');
    }
}
