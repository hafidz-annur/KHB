<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\Cast\String_;

class BannerController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $banners = Banner::orderBy('updated_at', 'desc')->get();
    return view('content.banner.banner', ['banners' => $banners]);
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
        'button_name' => 'nullable|string|max:255',
        'link' => 'nullable|string|max:255',
        'is_active' => 'boolean',
      ]);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'banner/';
        $time = date('YmdHis');
        $fileName = 'banner-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $banner = Banner::create($validatedData);

      return redirect()
        ->to('/admin/banner')
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
    $banner = Banner::findOrFail($id);
    return response()->json($banner);
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
        'button_name' => 'nullable|string|max:255',
        'link' => 'nullable|string|max:255',
        'is_active' => 'boolean',
      ]);

      $banner = Banner::findOrFail($id);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        if ($old_image_path_en = $banner->thumbnail) {
          $file_path = public_path('uploaded_files/' . 'banner/' . $old_image_path_en);
          if (File::exists($file_path)) {
            File::delete($file_path);
          }
        }

        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'banner/';
        $time = date('YmdHis');
        $fileName = 'banner-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $banner->update($validatedData);

      return redirect()
        ->to('/admin/banner')
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
    $banner = Banner::findOrFail($id);

    if ($banner->is_active) {
      $banner->is_active = false;
    } else {
      $banner->is_active = true;
    }

    $banner->update();

    return response()->json($banner);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $banner = Banner::findOrFail($id);
    $banner->delete();

    return response()->json(null, 204);
  }
}
