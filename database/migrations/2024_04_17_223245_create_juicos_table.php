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
        Schema::create('juicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('juicoitem_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('produtc_name')->nullable();
            $table->string('featured_img')->nullable();
            $table->string('conte')->nullable();
            $table->boolean('is_popular')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juicos');
    }
};
