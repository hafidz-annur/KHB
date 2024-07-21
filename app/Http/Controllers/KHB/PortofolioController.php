<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortofolioController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $portofolios = Portofolio::orderBy('updated_at', 'desc')->get();
    return view('content.portofolio.portofolio', ['portofolios' => $portofolios]);
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
        $destinationPath = public_path() . '/uploaded_files/' . 'portofolio/';
        $time = date('YmdHis');
        $fileName = 'portofolio-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $portofolio = Portofolio::create($validatedData);

      return redirect()
        ->to('/admin/portofolio')
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
    $portofolio = Portofolio::findOrFail($id);
    return response()->json($portofolio);
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

      $portofolio = Portofolio::findOrFail($id);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        if ($old_image_path_en = $portofolio->thumbnail) {
          $file_path = public_path('uploaded_files/' . 'portofolio/' . $old_image_path_en);
          if (File::exists($file_path)) {
            File::delete($file_path);
          }
        }

        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'portofolio/';
        $time = date('YmdHis');
        $fileName = 'portofolio-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $portofolio->update($validatedData);

      return redirect()
        ->to('/admin/portofolio')
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
    $portofolio = Portofolio::findOrFail($id);

    if ($portofolio->is_active) {
      $portofolio->is_active = false;
    } else {
      $portofolio->is_active = true;
    }

    $portofolio->update();

    return response()->json($portofolio);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $portofolio = Portofolio::findOrFail($id);
    $portofolio->delete();

    return response()->json(null, 204);
  }
}
