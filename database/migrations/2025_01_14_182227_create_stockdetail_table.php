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
        Schema::create('stockDetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stockId');
            $table->unsignedBigInteger('productId');
            $table->integer('quantity');

            $table->foreign('stockId')->references('id')->on('stockRequestMaster')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockdetail');
    }
};
