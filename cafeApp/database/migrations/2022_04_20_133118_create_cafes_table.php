<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            
            // value type related to the google map api
            $table->string('map_src_google_map',300)->nullable();

            $table->string('city');
            $table->string('provance');
            $table->string('email_address')->unique();
            $table->string('phone_number')->unique();

            //Cover Image fields
            $table->string('coverImage_original_filename')->nullable();
            $table->string('coverImage_thumbnail_filename')->nullable();

            

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
        Schema::dropIfExists('cafes');
    }
}
