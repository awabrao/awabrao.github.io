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
            $table->string('ProductName');
            $table->string('ProductBrand')->nullable();
            $table->integer('Ram')->nullable();
            $table->integer('Hard')->nullable();
            $table->string('HardDiskType')->nullable();
            $table->integer('ProductPrice');
            $table->string('ProductDescription')->nullable();
            $table->string('ProductImage');
            $table->string('ProductImage2');
            $table->string('ProductImage3');
            $table->string('type');
            $table->rememberToken();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
