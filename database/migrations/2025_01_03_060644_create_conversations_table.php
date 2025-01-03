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
        Schema::create('conversations', function (Blueprint $table) {
            $table->id('_id'); // Unique ID của cuộc trò chuyện
            $table->json('participant_ids'); // Danh sách ID của người tham gia
            $table->json('last_message')->nullable(); // Tin nhắn cuối
            $table->timestamp('created_at')->useCurrent(); // Thời điểm tạo cuộc trò chuyện

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversations');
    }
};
