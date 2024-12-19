<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('siswa', function (Blueprint $table) {
        $table->id();
        $table->string('nis')->unique();
        $table->string('nama');
        $table->string('alamat');
        $table->string('no_hp');
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
        $table->string('hobi')->nullable();
        $table->timestamps();
    });
}


};