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
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('login')->unique(); // Уникальный логин
            $table->string('password'); // Пароль (будет хешироваться)
            $table->string('email')->unique(); // Уникальный email
            $table->timestamps(); // Создает created_at и updated_at
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
