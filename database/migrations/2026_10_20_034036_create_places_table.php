<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('location');
            $table->string('image');
            $table->text('description');
            $table->string('best_time');
            $table->text('activities');
            $table->text('facilities');
            $table->string('budget');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('places'); }
};