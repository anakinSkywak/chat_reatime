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
        Schema::create('users', function (Blueprint $table) {
            $table->id('_id'); // Unique ID của người dùng
            $table->string('username'); // Tên đăng nhập
            $table->string('email')->unique(); // Email
            $table->string('password_hash'); // Mật khẩu đã mã hóa
            $table->string('profile_picture')->nullable(); // URL hình đại diện
            $table->string('status')->default('offline'); // Trạng thái (online, offline, đang gõ...)
            $table->timestamp('last_seen')->nullable(); // Thời điểm cuối người dùng hoạt động
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
