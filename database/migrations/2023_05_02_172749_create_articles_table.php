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
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('sub_title')->nullable();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->longText('details');
            $table->string('cover_image')->nullable();
            $table->string('cover_image_src')->nullable();
            $table->string('cover_video')->nullable();
            $table->boolean('public')->default(false);
            $table->boolean('extranet')->default(false);
            $table->boolean('deleted')->default(false);
            $table->enum('status', ['published', 'draft'])->default('draft');
            $table->string('themes')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->unsignedBigInteger('sector_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
