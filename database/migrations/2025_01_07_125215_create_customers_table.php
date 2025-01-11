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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();  // 自動増分の主キー
            $table->string('name');  // 顧客名
            $table->string('email')->unique();  // メールアドレス（ユニーク）
            $table->string('phone')->nullable();  // 電話番号（任意）
            $table->text('address')->nullable();  // 住所（任意）
            $table->timestamps();  // created_at と updated_at タイムスタンプ
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
