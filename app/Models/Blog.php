<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  use HasFactory;

  protected $fillable = ['thumbnail', 'alt', 'title', 'slug', 'description', 'viewed', 'is_active'];

  function tag()
  {
    return $this->hasMany(BlogTag::class, 'blog_id');
  }
}
