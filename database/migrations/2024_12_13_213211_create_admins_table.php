<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('email')->unique();
        //     $table->string('password');
        //     $table->timestamps();
        //     $table->text('bio')->default('Admin');
        //     $table->string('picture')->default('login-bg.jpg');
        // });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
