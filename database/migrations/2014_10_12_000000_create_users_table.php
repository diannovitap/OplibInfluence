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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('notelepon');
            $table->string('alamat');
            $table->string('tipemember');
            $table->string('institutlemdikti')->nullable();
            $table->string('perguruantinggi')->nullable();
            $table->string('institusi')->nullable();
            $table->string('imnotrobot');
            $table->string('ktp')->nullable();
            $table->string('karpeg')->nullable();
            $table->string('ijasah')->nullable();
            $table->rememberToken();
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
