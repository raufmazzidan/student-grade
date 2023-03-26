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
    Schema::create('grades', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string('name');
      $table->string('grade_quiz');
      $table->string('grade_assignment');
      $table->string('grade_absence');
      $table->string('grade_practice');
      $table->string('grade_exam');
      $table->float('score_quiz');
      $table->float('score_assignment');
      $table->float('score_absence');
      $table->float('score_practice');
      $table->float('score_exam');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('grades');
  }
};