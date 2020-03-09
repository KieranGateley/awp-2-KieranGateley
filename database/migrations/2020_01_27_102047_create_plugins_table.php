<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePluginsTable extends Migration {

    public function up()
    {
        Schema::create('plugins', function (Blueprint $table) {
            $table->string('name')->unique()->primary();
            $table->text('description')->nullable(true);
            $table->text('authors')->nullable(true);
            $table->text('website')->nullable(true);
            $table->string('spigot_id')->nullable(true);
            $table->text('dependencies')->nullable(true);
            $table->text('soft_dependencies')->nullable(true);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('plugins');
    }
}
