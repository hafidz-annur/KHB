<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPage extends Controller
{
  public function index(Request $request)
  {
    $search = $request->get('search');
    $blogs = Blog::where('is_active', true)
      ->orderBy('updated_at', 'desc')
      ->paginate(9);

    if (!empty($search)) {
      $blogs = Blog::where('is_active', true)
        ->orderBy('updated_at', 'desc')
        ->where(function ($query) use ($search) {
          $query->where('title', 'like', '%' . $search . '%')->orWhere('description', 'like', '%' . $search . '%');
        })
        ->paginate(9);
    }

    return view('user.news', compact('blogs'));
  }

  public function search(Request $request)
  {
    $search = $request->input('search');
    if (empty($search)) {
      return redirect()->to('berita');
    } else {
      return redirect()->to('berita?search=' . $search);
    }
}

  public function show($slug)
  {
    $blog = Blog::where('slug', $slug)->first();
    $blog_others = Blog::where('slug', '!=', $slug)
      ->where('is_active', true)
      ->inRandomOrder()
      ->limit(2)
      ->get();

    // Ambil IP address pengguna
    $ip = request()->ip();
    // Periksa apakah IP sudah melihat post ini sebelumnya
    if (!session()->has('blog_viewed_' . $ip . $blog->id)) {
      // Jika belum, tambahkan views
      $blog->increment('viewed');

      // Tandai post ini sudah dilihat oleh IP saat ini
      session(['blog_viewed_' . $ip . $blog->id => true]);
    }

    return view('user.news-detail', [
      'blog' => $blog,
      'others' => $blog_others,
    ]);
  }
}
