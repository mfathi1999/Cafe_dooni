<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateAveragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate__averages', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('quality');
            $table->integer('quality_count');
            $table->tinyInteger('music');
            $table->integer('music_count');
            $table->tinyInteger('pricing');
            $table->integer('pricing_count');
            $table->tinyInteger('proper_behavior');
            $table->integer('proper_behavior_count');
            $table->tinyInteger('comfortability');
            $table->integer('comfortability_count');
            $table->tinyInteger('environment_design');
            $table->Integer('environment_design_count');
            $table->tinyInteger('health');
            $table->Integer('health_count');
            $table->tinyInteger('service_speed');
            $table->Integer('service_speed_count');
            $table->tinyInteger('variety_of_menu');
            $table->Integer('variety_of_menu_count');
            $table->tinyInteger('accessibility');
            $table->Integer('accessibility_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate__averages');
    }
}
