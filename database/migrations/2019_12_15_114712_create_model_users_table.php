<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table ->string('email',100)->unique();
            $table->string('password');
            $table->tinyInteger('jk')->nullable()->default(null);
            $table->date('tgllahir');
            $table->string('ktp')->nullable()->default(null);
            $table->string('sim')->nullable()->default(null);
            $table->tinyInteger('sebagai')->nullable()->default(null);;
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
        Schema::dropIfExists('model_users');
    }
}
