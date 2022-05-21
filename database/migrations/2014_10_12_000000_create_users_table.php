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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 14)->nullable();
            $table->date('birthday')->nullable();
            $table->string('address', 100)->nullable();
            $table->string('number', 5)->nullable();
            $table->string('neighborhood', 50)->nullable();
            $table->string('complement', 50)->nullable();
            $table->string('zipcode', 9)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('course', 30)->nullable();
            $table->string('university', 30)->nullable();
            $table->string('profession', 30)->nullable();
            $table->string('company', 30)->nullable();
            $table->text('about')->nullable();
            $table->text('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
}
