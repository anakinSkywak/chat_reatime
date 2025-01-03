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
        Schema::create('messages', function (Blueprint $table) {
            $table->id('_id'); // Unique ID của tin nhắn
            $table->foreignId('conversation_id'); // ID của cuộc trò chuyện
            $table->foreignId('sender_id'); // ID người gửi
            $table->string('message_content'); // Nội dung tin nhắn
            $table->timestamp('timestamp'); // Thời gian gửi
            $table->boolean('is_read')->default(false); // Trạng thái đã đọc hay chưa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
