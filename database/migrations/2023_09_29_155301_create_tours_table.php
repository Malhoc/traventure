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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location')->nullable();
            $table->string('duration')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('description')->nullable();
            $table->longText('facilities')->nullable();
            $table->longText('includes')->nullable();
            $table->longText('excludes')->nullable();
            $table->longText('features')->nullable();
            $table->integer('price')->default(0);
            $table->integer('group_limit')->default(30);
            $table->integer('per_person_booking_limit')->default(5);
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('gallery')->nullable();
            $table->longText('meta_tag_title')->nullable();
            $table->longText('meta_tag_keywords')->nullable();
            $table->longText('meta_tag_description')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->string('image_alt')->nullable();
            $table->boolean('is_active')->default(true);
            $table->foreignId('tour_category_id')->nullable();
            $table->foreign('tour_category_id')->references('id')->on('tour_categories')->onDelete('set null');
            $table->foreignId('destination_id')->nullable();
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
