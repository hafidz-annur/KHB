<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Controllers\KHB\Analytics;
use App\Http\Controllers\KHB\BannerController;
use App\Http\Controllers\KHB\BlogController;
use App\Http\Controllers\KHB\CertificateController;
use App\Http\Controllers\KHB\ClientController;
use App\Http\Controllers\KHB\ContactController;
use App\Http\Controllers\KHB\GalleryController;
use App\Http\Controllers\KHB\PortofolioController;
use App\Http\Controllers\KHB\ProductCategoryController;
use App\Http\Controllers\KHB\ProductController;
use App\Http\Controllers\KHB\ProductImageController;
use App\Http\Controllers\KHB\ProfileController;

// authentication
Route::get('/auth/login', [LoginBasic::class, 'index'])->name('auth-login');
Route::post('/auth/login', [LoginBasic::class, 'login'])->name('login');
Route::post('/auth/change-password', [LoginBasic::class, 'changePassword'])->name('change-password');


Route::middleware(['auth'])->group(function () {
  // KHBeton Route
  Route::get('/', [Analytics::class, 'index'])->name('admin-dashboard');

  // Banner
  Route::resource('banner', BannerController::class)->names([
    'index' => 'banner',
    'store' => 'banner.store',
    'show' => 'banner.show',
    'update' => 'banner.update',
    'destroy' => 'banner.destroy',
  ]);
  Route::put('banner/status/{id}', [BannerController::class, 'update_status']);

  // Category
  Route::resource('kategori/produk', ProductCategoryController::class)->names([
    'index' => 'kategori-produk',
    'store' => 'kategori-produk.store',
    'show' => 'kategori-produk.show',
    'update' => 'kategori-produk.update',
    'destroy' => 'kategori-produk.destroy',
  ]);

  // Product
  Route::resource('produk', ProductController::class);
  Route::put('produk/status/{id}', [ProductController::class, 'update_status']);

  // Product Image
  Route::post('image/produk', [ProductImageController::class, 'store'])->name('image-produk.store');
  Route::delete('image/produk/{id}', [ProductImageController::class, 'destroy'])->name('image-produk.destroy');

  // Artikel
  Route::resource('artikel', BlogController::class)->names([
    'index' => 'artikel',
    'store' => 'artikel.store',
    'show' => 'artikel.show',
    'update' => 'artikel.update',
    'destroy' => 'artikel.destroy',
  ]);
  Route::put('artikel/status/{id}', [BlogController::class, 'update_status']);

  // Portofolio
  Route::resource('portofolio', PortofolioController::class)->names([
    'index' => 'portofolio',
    'store' => 'portofolio.store',
    'show' => 'portofolio.show',
    'update' => 'portofolio.update',
    'destroy' => 'portofolio.destroy',
  ]);
  Route::put('portofolio/status/{id}', [PortofolioController::class, 'update_status']);

  // Gallery
  Route::resource('galeri', GalleryController::class)->names([
    'index' => 'galeri',
    'store' => 'galeri.store',
    'show' => 'galeri.show',
    'update' => 'galeri.update',
    'destroy' => 'galeri.destroy',
  ]);
  Route::put('galeri/status/{id}', [GalleryController::class, 'update_status']);

  // Client
  Route::resource('klien', ClientController::class)->names([
    'index' => 'klien',
    'store' => 'klien.store',
    'show' => 'klien.show',
    'update' => 'klien.update',
    'destroy' => 'klien.destroy',
  ]);
  Route::put('klien/status/{id}', [ClientController::class, 'update_status']);

  // Certificate
  Route::resource('sertifikasi', CertificateController::class)->names([
    'index' => 'sertifikasi',
    'store' => 'sertifikasi.store',
    'show' => 'sertifikasi.show',
    'update' => 'sertifikasi.update',
    'destroy' => 'sertifikasi.destroy',
  ]);
  Route::put('sertifikasi/status/{id}', [CertificateController::class, 'update_status']);

  // Certificate
  Route::resource('profil', ProfileController::class)->names([
    'index' => 'profil',
    'update' => 'profil.update',
  ]);

  Route::post('profil/lokasi', [ProfileController::class, 'store_location'])->name('admin-lokasi');
  Route::delete('profil/lokasi/{id}', [ProfileController::class, 'delete_location'])->name('admin-lokasi-delete');

  Route::get('kontak', [ContactController::class, 'index'])->name('admin-kontak');

  Route::get('/auth/logout', [LoginBasic::class, 'logout']);
});
