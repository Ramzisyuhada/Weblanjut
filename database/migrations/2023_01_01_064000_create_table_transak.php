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
        Schema::create('table_transak', function (Blueprint $table) {
            $table->id();
            $table->timestamp('Tanggal')->nullable();
            $table->date('selesai');
            $table->unsignedBigInteger('harga_id');
            $table->foreign('harga_id')->references('id')->on('table_harga');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_item');
            $table->foreign('user_item')->references('id')->on('table_item');
            $table->unsignedBigInteger('user_status')->nullable()->default(1);;
            $table->foreign('user_status')->references('id')->on('table_status');
            $table->unsignedBigInteger('user_kategori');
            $table->foreign('user_kategori')->references('id')->on('table_kategori');
            $table->unsignedBigInteger('user_layanan');
            $table->foreign('user_layanan')->references('id')->on('table_layanan');
            $table->integer('Berat');
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
        Schema::dropIfExists('table_transak');
    }
};
