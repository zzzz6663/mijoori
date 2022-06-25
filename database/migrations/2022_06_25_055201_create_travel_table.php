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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('host_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();;
            $table->unsignedBigInteger('province_id')->nullable();;
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->integer('count')->nullable();
            $table->enum('gender',['male','family','female','both'])->nullable();
            $table->integer('active')->default(0)->nullable();
            $table->integer('confirm')->default(0)->nullable();
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
        Schema::dropIfExists('travel');
    }
};
