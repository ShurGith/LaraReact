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
            $table->string('name')->index();
            $table->longText('description')->nullable();
            $table->string('slug')->unique();
            $table->json('images')->nullable();
            $table->longText('features')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('oferta')->default(0);
            $table->integer('descuento')->nullable();
            $table->integer('units')->nullable();
            $table->integer('stars')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
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
