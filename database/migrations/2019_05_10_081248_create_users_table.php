<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->unsignedBigInteger('user_type_id')->default(1);
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('title_id');
            $table->string('address');        
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('identification_type_id');
            $table->string('identification_number');
            $table->timestamps();

            $table->foreign('user_type_id')
                ->references('id')->on('user_types')
                ->onDelete('cascade');

            $table->foreign('country_id')
                ->references('id')->on('countries')
                ->onDelete('cascade');
            
            $table->foreign('title_id')
                ->references('id')->on('titles')
                ->onDelete('cascade');
            
            $table->foreign('identification_type_id')
                ->references('id')->on('identification_types')
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
        Schema::dropIfExists('users');
    }
}
