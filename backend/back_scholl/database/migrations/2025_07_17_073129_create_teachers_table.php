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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
             $table->string('name', 100)->nullable()->default('text');
            $table->string('position', 100)->nullable()->default('text');
            $table->string('foto', 100)->nullable()->default('file');
            $table->integer('nip')->unsigned()->nullable()->default(50);
            $table->string('course', 100)->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
