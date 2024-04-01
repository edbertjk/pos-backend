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
        Schema::create('product2s', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("kategori");
            $table->string("harga_beli");
            $table->string("harga_jual");
            $table->integer("jumlah");
            $table->string("supplier_name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product2s');
    }
};
