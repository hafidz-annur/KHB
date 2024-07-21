<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  use HasFactory;

  protected $fillable = ['email', 'name', 'phone_number', 'product_id', 'message'];

  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id');
  }
}