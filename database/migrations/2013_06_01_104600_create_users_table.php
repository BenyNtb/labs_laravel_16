<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->string('email')->unique();
            $table->string('img')->default('img/defaultprofile.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('validate');
            $table->rememberToken();
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->unsignedBigInteger('photo_id');
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unsignedBigInteger('poste_id');
            $table->foreign('poste_id')->references('id')->on('postes');
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
}
