<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginBasic extends Controller
{
  public function index()
  {
    if (Auth::check()) {
      return redirect('admin/'); // Mengarahkan ke halaman dashboard jika sudah login
    }

    return view('content.authentications.auth-login-basic');
  }

  // Proses login
  public function login(Request $request)
  {
    // Validasi input
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    // Coba melakukan login
    if (Auth::attempt($credentials)) {
      // Jika berhasil login
      $request->session()->regenerate();

      return redirect()->intended('/admin')->with('success', 'Selamat anda berhasil masuk!');
    }

    // Jika gagal login
    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
    ]);
  }

  // Logout pengguna
  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/admin/auth/login')->with('success', 'Selamat anda berhasil logout!');
  }


  // change Password
  public function changePassword(Request $request)
  {

    try {

      // Validasi input
      $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|string|min:8|confirmed',
      ]);

      // Mengambil pengguna yang sedang login
      $user = Auth::user();

      // Memeriksa kecocokan password saat ini
      if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors([
          'current_password' => 'Password saat ini tidak sesuai.'
        ]);
      }

      // Mengubah password pengguna
      $user->password = Hash::make($request->new_password);
      $user->save();

      return redirect()->back()->with('success', 'Password berhasil diubah.');
    } catch (Exception $e) {
      return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }
}
