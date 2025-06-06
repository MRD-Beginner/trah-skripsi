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
        Schema::create('trah', function (Blueprint $table) {
            $table->id();
            $table->string('trah_name');
            $table->text('description')->nullable();
            $table->string('created_by')->constrained('users');
            $table->enum('visibility', ['private', 'public']);
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trah');
    }
};
