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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->text('website')->nullable();
            $table->float('long', 8, 4)->nullable();
            $table->integer('capacity')->nullable();
            $table->longText('details');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('sector_id');
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();

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
        Schema::dropIfExists('events');
    }
};
