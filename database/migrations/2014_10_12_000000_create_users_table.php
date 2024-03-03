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
            $table->id();
            $table->string('user_name')->unique()->comment('Tên người dùng');
            $table->string('email')->unique()->comment('Email');
            $table->string('password')->comment('Mật khẩu');
            $table->tinyInteger('role')->default(1)->comment('Quyền: 1| Người dùng - 2| Admin');
            $table->integer('phone')->nullable();
            $table->string('address')->nullable()->comment('Địa chỉ');
            $table->dateTime('email_verified_at')->nullable();
            $table->string('token_verify_email')->nullable();
            $table->string('token_verify_password')->nullable();
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
