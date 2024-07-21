<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\ClientCertificate;
use App\Models\Portofolio;
use App\Models\Product;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomePage extends Controller
{
  public function index()
  {
    $data = [
      'banners' => Banner::where('is_active', true)->get(),
      'categories' => ProductCategory::where('thumbnail', '!=', null)->get(),
      'portofolios' => Portofolio::orderBy('updated_at', 'desc')
        ->where('is_active', true)
        ->limit(6)
        ->get(),
      'blogs' => Blog::orderBy('updated_at', 'desc')
        ->where('is_active', true)
        ->limit(3)
        ->get(),
      'clients' => ClientCertificate::where('category', 'client')
        ->where('is_active', true)
        ->get(),
      'certificates' => ClientCertificate::where('category', 'certificate')
        ->where('is_active', true)
        ->get(),
    ];

    return view('user.home', $data);
  }
}
