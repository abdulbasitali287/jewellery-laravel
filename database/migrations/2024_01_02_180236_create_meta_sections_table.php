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
        Schema::create('meta_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_section_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('heading_1');
            $table->string('heading_2');
            $table->string('heading_3');
            $table->string('heading_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_sections');
    }
};
