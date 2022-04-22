<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenPinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_pinjam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pinjam');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('qty');
            $table->char('user_id');
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
        Schema::dropIfExists('dosen_pinjam');
    }
}
