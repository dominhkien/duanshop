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
        Schema::create('sanpham_kichco', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sp');
            $table->unsignedBigInteger('id_kc');
            $table->integer('so_luong');
            $table->integer('gia');
            $table->integer('trang_thai')->default(1);
            $table->timestamps();  

            // Foreign keys
            $table->foreign('id_sp')->references('id')->on('san_pham')->onDelete('cascade');
            $table->foreign('id_kc')->references('id')->on('kich_co')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('size_products');
    }
};
