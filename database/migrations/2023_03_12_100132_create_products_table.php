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
            $table->string('title')->nullable(); 
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price')->nullable();

            $table->string('folder')->nullable(); 
            $table->longText('product_cover')->nullable(); // main preview
            $table->longText('product_images')->nullable();

            // $table->boolean('hidden')->default(true);
            $table->boolean('featured')->default(false);
            $table->boolean('status')->default(true);

            $table->foreignId('brand_id')->constrained('brands')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
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
