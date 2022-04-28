<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman/booking', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->date('tgl_pinjam');
            $table->date('tgl_selesai');
            $table->date('tgl_booking');
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
        Schema::dropIfExists('dosen_booking');
    }
}
