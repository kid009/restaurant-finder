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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('restaurant_name')->index();
            // ใช้ decimal สำหรับพิกัดแผนที่ (ความละเอียด 8 ตำแหน่ง)
            $table->decimal('restaurant_latitude', 10, 8)->nullable();
            $table->decimal('restaurant_longitude', 11, 8)->nullable();
            $table->text('restaurant_address')->nullable();
            $table->string('restaurant_province')->index(); // ทำ index เผื่อการค้นหา
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
