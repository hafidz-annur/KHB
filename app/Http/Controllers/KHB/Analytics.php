<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ClientCertificate;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Portofolio;
use App\Models\Product;
use Illuminate\Http\Request;

class Analytics extends Controller
{

  public function index()
  {
    $dashboard['products'] = Product::where('is_active', true)->count();
    $dashboard['blogs'] = Blog::where('is_active', true)->count();
    $dashboard['portofolios'] = Portofolio::where('is_active', true)->count();
    $dashboard['galleries'] = Gallery::where('is_active', true)->count();
    $dashboard['clients'] = ClientCertificate::where('is_active', true)->where('category', 'client')->count();
    $dashboard['contacts'] = Contact::count();
    $dashboard['latest_blog'] = Blog::where('is_active', true)->orderBy('created_at', 'desc')->limit(5)->get();
    $dashboard['latest_contact'] = Contact::orderBy('created_at', 'desc')->limit(5)->get();
    return view('content.dashboard.dashboard', compact('dashboard'));
  }
}
