<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['name', 'description', 'authors', 'website', 'dependencies', 'soft_dependencies'];

    public function versions() {
        return $this->hasMany('App\PluginVersion');
    }
}
