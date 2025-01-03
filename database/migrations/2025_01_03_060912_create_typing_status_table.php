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
        Schema::create('typing_status', function (Blueprint $table) {
            $table->id('_id'); // Unique ID
            $table->foreignId('conversation_id'); // ID của cuộc trò chuyện
            $table->foreignId('user_id'); // ID của người dùng
            $table->boolean('is_typing'); // Trạng thái đang gõ (true/false)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('typing_status');
    }
};
