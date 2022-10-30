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
        Schema::create('handphone', function (Blueprint $table) {
            $table->id();
            $table->string('Merk');
            $table->string('tipe');
            $table->integer('Harga');
            $table->string('spesifikasi');
            $table->string('gambar');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('handphone');
    }
};
