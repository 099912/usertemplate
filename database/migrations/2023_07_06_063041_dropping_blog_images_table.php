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
        Schema::dropIfExists('blog_images');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::create('blog_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blogs_id');
            $table->foreign('blogs_id')->references('id')->on('blogs');
            $table->string('image');
            $table->timestamps();
        });
    }
};
