<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('software', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('slug')->unique();
            $table->string('version')->nullable();
            $table->text('description')->nullable(); // Mô tả
            $table->longText('thumbnail');
            $table->string('file_path')->nullable(); // Quan trọng: Đường dẫn file trên S3
            $table->unsignedBigInteger('file_size')->nullable(); // Kích thước file (bytes)
            $table->unsignedBigInteger('download_count')->default(0); // Đếm lượt tải
            $table->boolean('is_active')->default(true); // Trạng thái hiển thị
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software');
    }
};
