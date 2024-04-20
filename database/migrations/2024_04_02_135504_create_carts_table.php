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
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('picker_id')->nullable();
            $table->string('type')->nullable();
            $table->integer('status')->nullable();
            $table->string('state')->nullable();
            $table->decimal('service_total', 10, 2); // assuming it's a decimal field with precision 10 and scale 2
            $table->decimal('total', 10, 2); // assuming it's a decimal field with precision 10 and scale 2
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
