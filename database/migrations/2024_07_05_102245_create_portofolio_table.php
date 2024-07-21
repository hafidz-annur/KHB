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
    Schema::create('portofolio', function (Blueprint $table) {
      $table->id();
      $table->string('thumbnail');
      $table->string('alt');
      $table->string('title');
      $table->text('description');
      $table->string('location');
      $table->enum('category', ['BUMN', 'Swasta']);
      $table->boolean('is_active')->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('portofolio');
  }
};
