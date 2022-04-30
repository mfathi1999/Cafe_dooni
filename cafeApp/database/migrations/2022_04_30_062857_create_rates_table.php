<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Cafe;
use App\Models\User;


class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cafe::class);
            $table->foreignIdFor(User::class);
            $table->tinyInteger('quality');
            $table->tinyInteger('music');
            $table->tinyInteger('pricing');
            $table->tinyInteger('proper_behavior');
            $table->tinyInteger('comfortability');
            $table->tinyInteger('environment_design');
            $table->tinyInteger('health');
            $table->tinyInteger('service_speed');
            $table->tinyInteger('variety_of_menu');
            $table->tinyInteger('accessibility');
            $table->text('comment');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
}
