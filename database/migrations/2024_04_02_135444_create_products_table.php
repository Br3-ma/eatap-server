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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->text('description')->nullable(); // Assuming description can be long
            $table->decimal('price', 10, 2); // Assuming it's a decimal field with precision 10 and scale 2
            $table->decimal('price2', 10, 2)->nullable(); // Assuming it's a decimal field with precision 10 and scale 2, and can be nullable
            $table->decimal('price3', 10, 2)->nullable(); // Assuming it's a decimal field with precision 10 and scale 2, and can be nullable
            $table->text('image')->nullable();
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
