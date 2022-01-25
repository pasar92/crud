<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
  use HasFactory;

  protected $fillable = [
    'license_plate',
    'brand',
    'model',
    'description',
    'gps',
    'price'
  ];

  public function reservation()
  {
    return $this->hasMany(Reservation::class);
  }
}
