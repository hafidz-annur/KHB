<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioPage extends Controller
{
  public function index()
  {
    $portofolios = Portofolio::where('is_active', true)
      ->orderBy('updated_at', 'desc')
      ->paginate(9);

    return view('user.portofolio', compact('portofolios'));
  }
}
