<?php

use App\Http\Controllers\KHB\ContactController;
use App\Http\Controllers\User\BlogPage;
use App\Http\Controllers\User\ContactController as UserContactController;
use App\Http\Controllers\User\GalleryPage;
use App\Http\Controllers\User\HomePage;
use App\Http\Controllers\User\PortofolioPage;
use App\Http\Controllers\User\ProductPage;
use Illuminate\Support\Facades\Route;

// Main Page
Route::get('/', [HomePage::class, 'index'])->name('user-home');

//  Product Page
Route::get('/produk', [ProductPage::class, 'index'])->name('user-product');
Route::post('/produk', [ProductPage::class, 'search'])->name('user-product-search');
Route::get('/produk/{slug}', [ProductPage::class, 'show'])->name('user-product-detail');

//  Portofolio Page
Route::get('/portofolio', [PortofolioPage::class, 'index'])->name('user-portofolio');

//  Gallery Page
Route::get('/galeri', [GalleryPage::class, 'index'])->name('user-gallery');

//  News Page
Route::get('/berita', [BlogPage::class, 'index'])->name('user-blog');
Route::post('/berita', [BlogPage::class, 'search'])->name('user-blog-search');
Route::get('/berita/{slug}', [BlogPage::class, 'show'])->name('user-blog-detail');

//  About Page
Route::get('/tentang-kami', function () {
  return view('user.about');
});

//  Contact Page
Route::get('/kontak-kami', [UserContactController::class, 'index'])->name('user-kontak');
Route::post('/kontak-kami', [UserContactController::class, 'store'])->name('user.kontak.store');
