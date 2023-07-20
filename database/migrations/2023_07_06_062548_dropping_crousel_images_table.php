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
        //
        Schema::dropIfExists('crousel_images');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::create('crousel_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crousels_id');
            $table->foreign('crousels_id')->references('id')->on('crousels');
            $table->string('image');

            $table->timestamps();
        });
    }
};
