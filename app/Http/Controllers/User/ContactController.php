<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Mail\ThanksMail;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  function index()
  {
    $product = Product::all();
    $location = Location::all();
    return view('user.contact', compact('product', 'location'));
  }

  function store(Request $request)
  {
    try {
      // Validasi request
      $request->validate([
        'email' => 'required|email',
        'name' => 'required',
        'phone_number' => 'required',
        'product_id' => 'required',
        'message' => 'required',
      ]);

      // Simpan data ke dalam database
      $contact = Contact::create([
        'email' => $request->email,
        'name' => $request->name,
        'phone_number' => $request->phone_number,
        'product_id' => $request->product_id,
        'message' => $request->message,
      ]);

      // Kirim email notifikasi
      Mail::to(env('MAIL_ADMIN'))->send(new ContactFormMail($contact));
      Mail::to($contact->email)->send(new ThanksMail());

      // Redirect atau response sesuai kebutuhan aplikasi
      return redirect()->to('/kontak-kami?success=true');
    } catch (Exception $e) {
      return redirect()
        ->back()
        ->withInput()
        ->withErrors($e->getMessage())
        ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }
}
