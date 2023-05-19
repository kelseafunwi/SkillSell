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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fullname');
            $table->string('occupation')->nullable();
            $table->string('profile')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['activator', 'needer', 'admin']);
            $table->string('date_of_birth')->nullable();
            $table->string('location')->nullable();
            $table->longText('aboutyou')->nullable();
            $table->bigInteger('phone_id')->nullable();
            $table->enum('status', ['pending', 'active', 'suspended', 'rejected'])->default('active');
            $table->timestamp('last_seen')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
