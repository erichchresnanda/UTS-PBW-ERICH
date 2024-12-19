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
        if (!Schema::hasTable('buku')) {
            Schema::create('buku', function (Blueprint $table) {
                $table->id();
                $table->string('judul');
                $table->string('penulis');
                $table->string('penerbit');
                $table->integer('tahun_terbit');
                $table->timestamps();
            });
        }
    }
    

};