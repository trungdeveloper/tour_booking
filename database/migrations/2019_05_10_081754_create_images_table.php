<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('tour_id');
            $table->boolean('is_main');
            $table->timestamps();
            
            $table->foreign('hotel_id')
                ->references('id')->on('hotels')
                ->onDelete('cascade');
            
            $table->foreign('tour_id')
                ->references('id')->on('tours')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
