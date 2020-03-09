<?php

use App\Plugin;
use App\PluginVersion;
use Illuminate\Database\Seeder;

class PluginSeeder extends Seeder {

    public function run() {
        factory(Plugin::class, 30)->create()->each(function($plugin) {
           $versions = factory(PluginVersion::class, 5)->make();
           $plugin->versions()->saveMany($versions);
        });
    }
}
