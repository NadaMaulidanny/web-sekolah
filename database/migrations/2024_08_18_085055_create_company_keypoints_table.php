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
        Schema::create('company_keypoints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_about_id');
            $table->foreign('company_about_id')->references('id')->on('company_abouts')->onDelete('cascade');
            $table->string('keypoint');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_keypoints');
    }
};
