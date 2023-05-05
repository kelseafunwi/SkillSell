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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('user_id');
            $table->text('experience')->nullable();
            $table->unsignedBigInteger('qualification_id')->nullable();
            $table->unsignedBigInteger('job_type_id');
            $table->timestamp('deadline');
            $table->text('description');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_logo')->nullable();
            $table->string('company_website')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('sector_id');
            $table->string('location');
            $table->string('details');
            $table->integer('amount')->nullable();
            $table->string('category');
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
        Schema::dropIfExists('job_posts');
    }
};
