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
            $table->string('name');
            $table->string('image'); // Main image
            $table->json('images')->nullable(); // Additional images
            $table->decimal('price', 8, 2);
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->integer('rating')->default(0);
            $table->integer('review_count')->default(0);
            $table->text('description')->nullable();
            $table->string('availability')->default('In Stock');
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->string('sku')->nullable();
            $table->json('sizes')->nullable();
            $table->json('colors')->nullable();
            $table->string('material')->nullable();
            $table->string('weight')->nullable();
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
