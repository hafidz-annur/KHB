<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\ClientCertificate;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $clients = ClientCertificate::where('category', 'client')
      ->orderBy('updated_at', 'desc')
      ->get();
    return view('content.client.client', ['clients' => $clients]);
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

      $validatedData['category'] = 'client';

      // Handle file upload
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $file_format = $request->file('image')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'client/';
        $time = date('YmdHis');
        $fileName = 'client-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['image'] = $fileName;
      }

      $client = ClientCertificate::create($validatedData);

      return redirect()
        ->to('/admin/klien')
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
    $client = ClientCertificate::findOrFail($id);
    return response()->json($client);
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

      $client = ClientCertificate::findOrFail($id);

      // Handle file upload
      if ($request->hasFile('image')) {
        if ($old_image_path_en = $client->image) {
          $file_path = public_path('uploaded_files/' . 'client/' . $old_image_path_en);
          if (File::exists($file_path)) {
            File::delete($file_path);
          }
        }

        $file = $request->file('image');
        $file_format = $request->file('image')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'client/';
        $time = date('YmdHis');
        $fileName = 'client-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['image'] = $fileName;
      }

      $client->update($validatedData);

      return redirect()
        ->to('/admin/klien')
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
    $client = ClientCertificate::findOrFail($id);

    if ($client->is_active) {
      $client->is_active = false;
    } else {
      $client->is_active = true;
    }

    $client->update();

    return response()->json($client);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $client = ClientCertificate::findOrFail($id);
    $client->delete();

    return response()->json(null, 204);
  }
}
