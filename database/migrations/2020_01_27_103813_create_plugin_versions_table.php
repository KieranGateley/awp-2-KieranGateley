<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePluginVersionsTable extends Migration {

    public function up() {
        Schema::create('plugin_versions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plugin_name');
            $table->string('version');
            $table->text('description')->nullable(true);
            $table->string('download_url')->nullable(true);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('plugin_versions');
    }
}
