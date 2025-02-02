<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductPage extends Controller
{
  public function index()
  {
    $categories = ProductCategory::orderBy('name', 'asc')->get();

    $products = Product::where('is_active', true)->paginate(12);

    return view('user.product', [
      'categories' => $categories,
      'products' => $products,
    ]);
  }

  public function search(Request $request)
  {
    $search = $request->input('search');
    $category = $request->input('category');
    $categories = ProductCategory::orderBy('name', 'asc')->get();

    if ($category || ($category && $search)) {
      $products = Product::where('is_active', true)
        ->where('product_category_id', $category)
        ->where(function ($query) use ($search) {
          $query
            ->where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('dimension', 'like', '%' . $search . '%')
            ->orWhere('utility', 'like', '%' . $search . '%')
            ->orWhere('quality', 'like', '%' . $search . '%');
        })
        ->paginate(12);
    } else {
      $products = Product::where('is_active', true)
        ->where(function ($query) use ($search) {
          $query
            ->where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('dimension', 'like', '%' . $search . '%')
            ->orWhere('utility', 'like', '%' . $search . '%')
            ->orWhere('quality', 'like', '%' . $search . '%');
        })
        ->paginate(12);
    }

    return view('user.product', [
      'categories' => $categories,
      'products' => $products,
    ]);
  }

  public function show($slug)
  {
    $product = Product::where('slug', $slug)->first();
    $product_others = Product::where('slug', '!=', $slug)
      ->where('is_active', true)
      ->inRandomOrder()
      ->limit(4)
      ->get();

    // Ambil IP address pengguna
    $ip = request()->ip();
    // Periksa apakah IP sudah melihat post ini sebelumnya
    if (!session()->has('product_viewed_' . $ip . $product->id)) {
      // Jika belum, tambahkan views
      $product->increment('viewed');

      // Tandai post ini sudah dilihat oleh IP saat ini
      session(['product_viewed_' . $ip . $product->id => true]);
    }

    return view('user.product-detail', [
      'product' => $product,
      'others' => $product_others,
    ]);
  }
}
