<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
  private function getEmbedUrl($youtubeUrl)
  {
    preg_match(
      '/(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|.*&v=))([^\?&"\'\n\r#]+)/',
      $youtubeUrl,
      $matches
    );
    $id = $matches[1] ?? null;

    if ($id) {
      return "https://www.youtube.com/embed/{$id}";
    }

    // Jika tidak ditemukan ID, Anda bisa menangani kasus ini sesuai kebutuhan
    return null;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Product::orderBy('updated_at', 'desc')->get();
    $categories = ProductCategory::orderBy('updated_at', 'desc')->get();
    return view('content.product.product', ['products' => $products, 'categories' => $categories]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = ProductCategory::orderBy('updated_at', 'desc')->get();
    return view('content.product.product-add', ['categories' => $categories]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'string|max:255',
        'description' => 'nullable|string',
        'product_category_id' => 'nullable|integer|exists:product_categories,id',
        'dimension' => 'nullable|string|max:255',
        'utility' => 'nullable|string|max:255',
        'quality' => 'nullable|string|max:255',
        'youtube_link' => 'nullable|string|max:255',
        'is_active' => 'boolean',
      ]);

      $validatedData['youtube_link'] = $this->getEmbedUrl($validatedData['youtube_link']);

      $validatedData['slug'] = Str::slug($validatedData['name']);

      $product = Product::create($validatedData);

      return redirect()
        ->to('/admin/produk/' . $product->id)
        ->with('success', 'Data berhasil ditambahkan');
    } catch (Exception $e) {
      return redirect()
        ->back()
        ->withInput()
        ->withErrors($e->getMessage())
        ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $product = Product::findOrFail($id);
    return view('content.product.product-view', ['product' => $product]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $product = Product::findOrFail($id);
    return response()->json($product);
  }

  public function update_status(string $id)
  {
    $product = Product::findOrFail($id);

    if ($product->is_active) {
      $product->is_active = false;
    } else {
      $product->is_active = true;
    }

    $product->update();

    return response()->json($product);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    try {
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'string|max:255',
        'description' => 'nullable|string',
        'product_category_id' => 'nullable|integer|exists:product_categories,id',
        'dimension' => 'nullable|string|max:255',
        'utility' => 'nullable|string|max:255',
        'quality' => 'nullable|string|max:255',
        'youtube_link' => 'nullable|string|max:255',
        'is_active' => 'boolean',
      ]);

      $validatedData['slug'] = Str::slug($validatedData['name']);
      $validatedData['youtube_link'] = $this->getEmbedUrl($validatedData['youtube_link']);

      $product = Product::findOrFail($id);

      $product->update($validatedData);

      return redirect()
        ->to('/admin/produk/' . $product->id)
        ->with('success', 'Data berhasil ditambahkan');
    } catch (Exception $e) {
      return redirect()
        ->back()
        ->withInput()
        ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $product = Product::findOrFail($id);
    $product->delete();

    return response()->json(null, 204);
  }
}
