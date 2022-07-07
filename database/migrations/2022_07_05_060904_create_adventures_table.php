<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            // $table->unsignedBigInteger('adventureable_id')->nullable();
            // $table->string('adventureable_type')->nullable();
            $table->string('cat')->nullable();
            $table->string('hardness')->nullable();
            $table->integer('members')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->string('name',500)->nullable();
            $table->text('short')->nullable();
            $table->text('action_include')->nullable();
            $table->text('action_not_include')->nullable();
            $table->string('location',256)->nullable();
            $table->string('period',256)->nullable();
            $table->string('type_period',256)->nullable();
            $table->string('time_period',256)->nullable();
            $table->integer('count')->nullable();
            $table->integer('price')->nullable();
            $table->string('confirm',5)->default('0')->nullable();
            $table->string('facility',500)->nullable();
            $table->string('benefit',500)->nullable();
            $table->text('info')->nullable();
            $table->text('more')->nullable();
            $table->text('return_mony')->nullable();
            $table->string('place',500)->nullable();
            $table->string('address',500)->nullable();
            $table->string('latitude',256)->nullable();
            $table->string('longitude',256)->nullable();
            $table->text('plan')->nullable();
            $table->string('stage')->default(1)->nullable();

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
        Schema::dropIfExists('adventures');
    }
};
