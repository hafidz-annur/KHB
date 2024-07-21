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
    Schema::create('profile', function (Blueprint $table) {
      $table->id();
      $table->string('logo_color');
      $table->string('logo_white');
      $table->string('title');
      $table->string('tagline');
      $table->string('email');
      $table->string('office_number');
      $table->text('location');
      $table->string('wa_number_1');
      $table->string('wa_number_2');
      $table->string('instagram_account');
      $table->string('x_account');
      $table->string('facebook_account');
      $table->string('linkedin_account');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('profile');
  }
};
