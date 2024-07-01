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

             Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('nama_product', length: 30);
                $table->integer('jumlah_product');
                $table->string('supplier_product');
                $table->integer('harga_product');
                $table->enum('status_product', ['best product', 'basic products']);
                $table->string('foto_product');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
