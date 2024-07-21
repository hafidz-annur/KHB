<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\ClientCertificate;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CertificateController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $certificates = ClientCertificate::where('category', 'certificate')
      ->orderBy('updated_at', 'desc')
      ->get();
    return view('content.certificate.certificate', ['certificates' => $certificates]);
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
        'image' => 'required|image|mimes:png,jpg,webp',
        'alt' => 'nullable|string|max:255',
        'is_active' => 'boolean',
      ]);

      $validatedData['category'] = 'certificate';

      // Handle file upload
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $file_format = $request->file('image')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'certificate/';
        $time = date('YmdHis');
        $fileName = 'certificate-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['image'] = $fileName;
      }

      $certificate = ClientCertificate::create($validatedData);

      return redirect()
        ->to('/admin/sertifikasi')
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
    $certificate = ClientCertificate::findOrFail($id);
    return response()->json($certificate);
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
        'image' => 'image|mimes:png,jpg,webp',
        'alt' => 'nullable|string|max:255',
        'is_active' => 'boolean',
      ]);

      $certificate = ClientCertificate::findOrFail($id);

      // Handle file upload
      if ($request->hasFile('image')) {
        if ($old_image_path_en = $certificate->image) {
          $file_path = public_path('uploaded_files/' . 'certificate/' . $old_image_path_en);
          if (File::exists($file_path)) {
            File::delete($file_path);
          }
        }

        $file = $request->file('image');
        $file_format = $request->file('image')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'certificate/';
        $time = date('YmdHis');
        $fileName = 'certificate-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['image'] = $fileName;
      }

      $certificate->update($validatedData);

      return redirect()
        ->to('/admin/sertifikasi')
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
    $certificate = ClientCertificate::findOrFail($id);

    if ($certificate->is_active) {
      $certificate->is_active = false;
    } else {
      $certificate->is_active = true;
    }

    $certificate->update();

    return response()->json($certificate);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $certificate = ClientCertificate::findOrFail($id);
    $certificate->delete();

    return response()->json(null, 204);
  }
}
