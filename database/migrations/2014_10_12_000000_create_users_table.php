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
        Schema::create('users', function (Blueprint $table) {
<<<<<<< Updated upstream
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
=======
            $table->integer('id')->autoIncrement()->nullable(false)->primaryKey();
            $table->string('number', 45)->nullable(false);
            $table->string('fname', 225)->nullable(false);
            $table->string('lname', 225)->nullable(false);
            $table->string('image', 225)->nullable(false);
            $table->string('email', 225)->nullable(false)->unique();
            $table->string('password', 225)->nullable(false);
            $table->string('phone', 10)->nullable();
            $table->string('role')->nullable(false)->default('normal_employee');

>>>>>>> Stashed changes
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
