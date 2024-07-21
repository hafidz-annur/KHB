<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // Mengambil semua data kontak
    $contacts = Contact::orderBy('updated_at', 'desc')->get();
    return view('content.contact.contact', compact('contacts'));
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
    // Validasi request
    $request->validate([
      'email' => 'required|email',
      'name' => 'required',
      'phone_number' => 'required',
      'product_id' => 'required',
      'message' => 'required',
    ]);

    // Simpan data baru ke dalam database
    $contact = Contact::create($request->all());

    return response()->json($contact, 201);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    // Temukan kontak berdasarkan ID
    $contact = Contact::findOrFail($id);
    return response()->json($contact);
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
    // Validasi request
    $request->validate([
      'email' => 'required|email',
      'name' => 'required',
      'phone_number' => 'required',
      'product_id' => 'required',
      'message' => 'required',
    ]);

    // Temukan kontak berdasarkan ID dan update datanya
    $contact = Contact::findOrFail($id);
    $contact->update($request->all());

    return response()->json($contact, 200);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    // Temukan kontak berdasarkan ID dan hapus
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return response()->json(null, 204);
  }
}
