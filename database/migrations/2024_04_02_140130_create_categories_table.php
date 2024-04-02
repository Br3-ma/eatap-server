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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description')->nullable(); // Assuming description can be long
            $table->string('image')->nullable(); // Assuming it's a string field and can be nullable
            $table->string('icon_name')->nullable(); // Assuming it's a string field and can be nullable
            $table->string('bg_color')->nullable(); // Assuming it's a string field and can be nullable, and changed column name to 'bg_color' (underscore instead of hyphen)
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
