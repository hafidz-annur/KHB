<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $profile = Profile::first();
    return view('content.profile.profile', compact('profile'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    try {
      // Validasi data yang dikirim dari form
      $validatedData = $request->validate([
        'logo_color' => 'image|mimes:png,jpg,webp',
        'logo_white' => 'image|mimes:png,jpg,webp',
        'title' => 'required|string',
        'tagline' => 'required|string',
        'email' => 'required|email',
        'office_number' => 'required|string',
        'location' => 'required|string',
        'wa_number_1' => 'nullable|string',
        'wa_number_2' => 'nullable|string',
        'instagram_account' => 'nullable|string',
        'x_account' => 'nullable|string',
        'facebook_account' => 'nullable|string',
        'linkedin_account' => 'nullable|string',
      ]);

      // Handle file logo color
      if ($request->hasFile('logo_color')) {
        $file = $request->file('logo_color');
        $file_format = $request->file('logo_color')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'logo/';
        $time = date('YmdHis');
        $fileName = 'logo_color-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['logo_color'] = $fileName;
      }

      // Handle file logo color
      if ($request->hasFile('logo_white')) {
        $file = $request->file('logo_white');
        $file_format = $request->file('logo_white')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'logo/';
        $time = date('YmdHis');
        $fileName = 'logo_white-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['logo_white'] = $fileName;
      }

      // Update data post di dalam database
      $profile = Profile::findOrFail($id);
      $profile->update($validatedData);

      // Redirect ke halaman detail post atau halaman lain sesuai kebutuhan
      return redirect()
        ->to('/admin/profil')
        ->with('success', 'Profil berhasil diperbarui.');
    } catch (Exception $e) {
      return redirect()
        ->back()
        ->withInput()
        ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }
}
