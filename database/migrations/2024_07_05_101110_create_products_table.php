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
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('slug');
      $table->text('description')->nullable();
      $table->unsignedBigInteger('product_category_id');
      $table->string('dimension')->nullable();
      $table->string('utility')->nullable();
      $table->string('quality')->nullable();
      $table->string('youtube_link')->nullable();
      $table->boolean('is_active')->default(true);
      $table->timestamps();

      // Definisi foreign key
      $table
        ->foreign('product_category_id')
        ->references('id')
        ->on('product_categories')
        ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};
