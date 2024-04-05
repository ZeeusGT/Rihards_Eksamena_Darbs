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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isArtist')->default(false);
            $table->boolean('isAdmin')->default(false);
            $table->json('Liked_Songs')->default(json_encode([]));
            $table->timestamps();
        });

        DB::table('users')->insert(
            [
                'username' => 'Rihards', 'email' => 'ZeeusGT@gmail.com',
                'password' => '$2y$12$ca/ulq5fSj6tyKyCKjjNtuPgGRCC3fqR4Y1tm1bgjM7o2q7AasQkS', 'isArtist' => True,
                'isAdmin' => True, 'Liked_Songs' => json_encode([1, 2, 3]),
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
