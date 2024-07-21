@extends('layouts/contentNavbarLayout')

@section('title', 'Tambah Artikel')

@section('content')
    <style>
        .preview {
            width: 100%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary">
            <h5 class="m-0 text-white">
                <i class="mdi mdi-newspaper me-2"></i>
                Tambahkan Artikel
            </h5>
            <a href="{{ route('artikel') }}" class="btn btn-sm btn-light py-1 px-2">
                <i class="mdi mdi-arrow-left me-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body pt-3">
            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <img loading="lazy" id="previewThumbnail" class="preview shadow"
                                src="https://placehold.co/800x300" alt="Preview">

                            <div class="bg-white position-relative overflow-hidden">
                                <input type="file" class="position-absolute z-0 top-0" id="thumbnail" name="thumbnail"
                                    placeholder="Thumbnail" accept="image/*" onchange="previewImage(this)">
                                <label for="thumbnail" class="btn btn-sm btn-light shadow d-block py-2">Tambahkan
                                    Gambar <span class="text-danger">*</span></label>
                            </div>
                            <p id="infoThumbnail" class="text-center lh-1 mt-1 d-none">
                                <small>
                                    Klik untuk mengganti gambar sebelumnya.
                                </small>
                            </p>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="alt" name="alt" placeholder="Alt"
                                value="{{ old('alt') }}">
                            <label for="alt">Alt <span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach ($errors->all() as $error)
                                    <small class="text-danger"><strong>Oops</strong>, {{ $error }}</small>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Judul"
                                value="{{ old('title') }}">
                            <label for="title">Judul <span class="text-danger">*</span></label>
                        </div>

                        <div class="form-group mb-3">
                            <textarea class="form-control" id="description" name="description" placeholder="Deskripsi">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tags" name="tags" placeholder="Tag"
                                value="{{ old('tags') }}">
                            <label for="tags">Tag</label>
                            <small>Berilah tanda koma <strong> (,) </strong> untuk menambahkan lebih dari 1 tag</small>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary"><i
                            class="mdi mdi-content-save me-2"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#previewThumbnail').attr('src', e.target.result);
                    console.log(e.target);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
    </script>
@endsection
