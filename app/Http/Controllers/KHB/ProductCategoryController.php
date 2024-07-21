<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $categories = ProductCategory::orderBy('updated_at', 'desc')->get();
    return view('content.product.category.product-category', ['categories' => $categories]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'thumbnail' => 'required|image|mimes:png,jpg,webp',
        'alt' => 'nullable|string|max:255',
      ]);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'category/';
        $time = date('YmdHis');
        $fileName = 'category-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $category = ProductCategory::create($validatedData);

      return redirect()
        ->to('/admin/kategori/produk')
        ->with('success', 'Data berhasil ditambahkan');
    } catch (Exception $e) {
      return redirect()
        ->back()
        ->withInput()
        ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $category = ProductCategory::findOrFail($id);
    return response()->json($category);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    try {
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'thumbnail' => 'image|mimes:png,jpg,webp',
        'alt' => 'nullable|string|max:255',
      ]);

      $category = ProductCategory::findOrFail($id);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        if ($old_image_path_en = $category->thumbnail) {
          $file_path = public_path('uploaded_files/' . 'category/' . $old_image_path_en);
          if (File::exists($file_path)) {
            File::delete($file_path);
          }
        }

        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'category/';
        $time = date('YmdHis');
        $fileName = 'category-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $category->update($validatedData);

      return redirect()
        ->to('/admin/kategori/produk')
        ->with('success', 'Data berhasil diperbaharui');
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
    $category = ProductCategory::findOrFail($id);
    $category->delete();

    return response()->json(null, 204);
  }
}
