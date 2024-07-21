<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryPage extends Controller
{
  public function index()
  {
    $galleries = Gallery::where('is_active', true)
      ->orderBy('updated_at', 'desc')
      ->paginate(9);

    return view('user.gallery', compact('galleries'));
  }
}
