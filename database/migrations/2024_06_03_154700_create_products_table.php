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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('anh', 255);
            $table->string('ten', 100);
            $table->text('mo_ta');
            $table->integer('id_the_loai');
            $table->integer('id_thuong_hieu');
            $table->integer('trang_thai')->default(1);
            $table->timestamps();  
            $table->foreign('id_the_loai')->references('id')->on('the_loai')->onDelete('cascade');
            $table->foreign('id_thuong_hieu')->references('id')->on('thuong_hieu')->onDelete('cascade');
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
