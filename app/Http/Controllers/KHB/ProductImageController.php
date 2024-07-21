<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Exception;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      $validatedData = $request->validate([
        'product_id' => 'required|exists:products,id',
        'image' => 'required|image|mimes:png,jpg,webp',
        'alt' => 'required|string',
      ]);

      // Handle file upload
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $file_format = $request->file('image')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'product/';
        $time = date('YmdHis');
        $fileName = 'product-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['image'] = $fileName;
      }

      $productImage = ProductImage::create($validatedData);

      return redirect()
        ->back()
        ->with('success', 'Gambar berhasil ditambahkan');
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
    $productImage = ProductImage::findOrFail($id);
    $productImage->delete();
    return response()->json(null, 204);
  }
}
