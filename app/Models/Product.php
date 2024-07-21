<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'slug',
    'description',
    'product_category_id',
    'dimension',
    'utility',
    'quality',
    'youtube_link',
    'is_active',
  ];

  public function category()
  {
    return $this->belongsTo(ProductCategory::class, 'product_category_id');
  }

  public function image()
  {
    return $this->hasMany(ProductImage::class, 'product_id');
  }

  public function contact()
  {
    return $this->hasMany(Contact::class, 'product_id');
  }
}
