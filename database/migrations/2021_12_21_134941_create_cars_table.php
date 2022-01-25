<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cars', function (Blueprint $table) {
      $table->id();
      $table->string('license_plate');
      $table->string('brand');
      $table->string('model');
      $table->text('description');
      $table->boolean('gps');
      $table->decimal('price', $precision = 10, $scale = 2);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('cars');
  }
}
