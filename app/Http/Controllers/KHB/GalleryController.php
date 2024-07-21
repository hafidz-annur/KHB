<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $galleries = Gallery::orderBy('updated_at', 'desc')->get();
    return view('content.gallery.gallery', ['galleries' => $galleries]);
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
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'thumbnail' => 'required|image|mimes:png,jpg,webp',
        'alt' => 'nullable|string|max:255',
        'location' => 'nullable|string|max:255',
        'is_active' => 'boolean',
      ]);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'gallery/';
        $time = date('YmdHis');
        $fileName = 'gallery-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $gallery = Gallery::create($validatedData);

      return redirect()
        ->to('/admin/galeri')
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
    $gallery = Gallery::findOrFail($id);
    return response()->json($gallery);
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
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'thumbnail' => 'image|mimes:png,jpg,webp',
        'alt' => 'nullable|string|max:255',
        'location' => 'nullable|string|max:255',
        'is_active' => 'boolean',
      ]);

      $gallery = Gallery::findOrFail($id);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        if ($old_image_path_en = $gallery->thumbnail) {
          $file_path = public_path('uploaded_files/' . 'gallery/' . $old_image_path_en);
          if (File::exists($file_path)) {
            File::delete($file_path);
          }
        }

        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'gallery/';
        $time = date('YmdHis');
        $fileName = 'gallery-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $gallery->update($validatedData);

      return redirect()
        ->to('/admin/gallery')
        ->with('success', 'Data berhasil diperbaharui');
    } catch (Exception $e) {
      return redirect()
        ->back()
        ->withInput()
        ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }

  public function update_status(string $id)
  {
    $gallery = Gallery::findOrFail($id);

    if ($gallery->is_active) {
      $gallery->is_active = false;
    } else {
      $gallery->is_active = true;
    }

    $gallery->update();

    return response()->json($gallery);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $gallery = Gallery::findOrFail($id);
    $gallery->delete();

    return response()->json(null, 204);
  }
}
