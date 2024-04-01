<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('histories2s', function (Blueprint $table) {
            $table->id();
            $table->string("mode");
            $table->string("tanggal");
            $table->longText("content");
            $table->string("pembayaran");
            $table->string("total");
            $table->string("kasir");
            $table->string("uang");
            $table->string("nota");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories2s');
    }
};