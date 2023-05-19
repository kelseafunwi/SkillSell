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
        Schema::create('companies', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('location');
            $table->string('company_name');
            $table->string('description');
            $table->string("company_website");
            $table->string('company_ceo');
            $table->integer('company_phone');
            $table->string('category');
            $table->string('taskID');
            $table->integer('company_creator_id');
            $table->string('photoId')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
