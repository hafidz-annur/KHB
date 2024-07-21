<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  use HasFactory;
  protected $table = 'profile';

  protected $fillable = [
    'logo_color',
    'logo_white',
    'title',
    'tagline',
    'email',
    'office_number',
    'location',
    'wa_number_1',
    'wa_number_2',
    'instagram_account',
    'x_account',
    'facebook_account',
    'linkedin_account',
  ];
}
