<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCertificate extends Model
{
  use HasFactory;
  protected $table = 'client_certificate';

  protected $fillable = ['image', 'alt', 'category', 'is_active'];
}
