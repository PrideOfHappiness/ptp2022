<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->char('user_id');
            $table->string('nama');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('status');
            $table->string('password');
            $table->bigInteger('department_id')->unsigned();
            $table->timestamps();
            $table->foreign('department_id')->references('id')->on('department')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
