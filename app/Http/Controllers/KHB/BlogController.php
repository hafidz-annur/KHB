<?php

namespace App\Http\Controllers\KHB;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $blogs = Blog::orderBy('updated_at', 'desc')->get();
    return view('content.blog.blog', compact('blogs'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('content.blog.blog-add');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      $validatedData = $request->validate([
        'thumbnail' => 'required|image|mimes:png,jpg,webp',
        'alt' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required',
        'is_active' => 'boolean',
      ]);

      $validatedData['slug'] = Str::slug($validatedData['title']);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'blog/';
        $time = date('YmdHis');
        $fileName = 'blog-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $blog = Blog::create($validatedData);

      //   Handle tag
      if ($request->tags) {
        $tags = explode(', ', $request->tags);

        foreach ($tags as $tag) {
          $tag_data = [
            'blog_id' => $blog->id,
            'tag' => $tag,
          ];

          BlogTag::create($tag_data);
        }
      }

      return redirect()
        ->route('artikel')
        ->with('success', 'Data berhasil ditambahkan.');
    } catch (Exception $e) {
      return redirect()
        ->back()
        ->withInput()
        ->withErrors($e->getMessage())
        ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $blog = Blog::findOrFail($id);
    $array = json_decode($blog->tag, true);
    $tags = array_column($array, 'tag');
    $tag = implode(', ', $tags);
    $blog['tags'] = $tag;

    return response()->json($blog);
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
        'thumbnail' => 'image|mimes:png,jpg,webp',
        'alt' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required',
        'is_active' => 'boolean',
      ]);

      $validatedData['slug'] = Str::slug($validatedData['title']);

      $blog = Blog::findOrFail($id);

      // Handle file upload
      if ($request->hasFile('thumbnail')) {
        if ($old_image_path_en = $blog->thumbnail) {
          $file_path = public_path('uploaded_files/' . 'blog/' . $old_image_path_en);
          if (File::exists($file_path)) {
            File::delete($file_path);
          }
        }

        $file = $request->file('thumbnail');
        $file_format = $request->file('thumbnail')->getClientOriginalExtension();
        $destinationPath = public_path() . '/uploaded_files/' . 'blog/';
        $time = date('YmdHis');
        $fileName = 'blog-' . $time . '.' . $file_format;
        $file->move($destinationPath, $fileName);
        $validatedData['thumbnail'] = $fileName;
      }

      $blog->update($validatedData);

      //   Handle tag
      if ($request->tags) {
        // Delete all first
        BlogTag::where('blog_id', $id)->delete();

        // Insert new
        $tags = explode(', ', $request->tags);
        foreach ($tags as $tag) {
          $tag_data = [
            'blog_id' => $blog->id,
            'tag' => $tag,
          ];
          BlogTag::create($tag_data);
        }
      }

      return redirect()
        ->route('artikel')
        ->with('success', 'Data berhasil diperbaharui.');
    } catch (Exception $e) {
      return redirect()
        ->back()
        ->withInput()
        ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
  }

  public function update_status(string $id)
  {
    $blog = Blog::findOrFail($id);

    if ($blog->is_active) {
      $blog->is_active = false;
    } else {
      $blog->is_active = true;
    }

    $blog->update();

    return response()->json($blog);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $blog = Blog::findOrFail($id);
    $blog->delete();

    return response()->json(null, 204);
  }
}
