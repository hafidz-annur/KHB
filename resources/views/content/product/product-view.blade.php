@extends('layouts/contentNavbarLayout')

@section('title', 'Lihat Produk')

@section('content')
    <style>
        .preview {
            width: 100%;
            height: 20 0px;
            object-fit: cover;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary">
            <h5 class="m-0 text-white">
                <i class="mdi mdi-cube me-2"></i>
                Lihat Produk
            </h5>
            <a href="{{ route('produk.index') }}" class="btn btn-sm btn-light py-1 px-2">
                <i class="mdi mdi-arrow-left me-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-md-4 order-md-1 order-2 ">
                    @if (count($product->image) > 0)
                        <section class="splide mt-3" id="gallery">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach ($product->image as $item)
                                        <li class="splide__slide">
                                            <div class="postition-relative overflow-hidden">
                                                <div class="position-absolute" style="top:5px; right:5px">
                                                    <button class="btn btn-sm btn-light p-1 text-danger"
                                                        onclick="confirmation('delete','{{ url('admin/image/produk') . '/' . $item->id }}')">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </button>
                                                </div>
                                                <img loading="lazy"
                                                    src="{{ asset('uploaded_files/product/' . $item->image) }}"
                                                    alt="{{ $item->alt }}" class="w-100">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                    @endif
                    <div class="text-center mt-3">
                        <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#productImageModal">
                            <i class="mdi mdi-plus me-2"></i>
                            Tambah Gambar
                        </button>
                    </div>

                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">
                            <small class="text-muted mb-0">Dimensi</small> <br>
                            {{ $product->dimension }}
                        </li>
                        <li class="list-group-item">
                            <small class="text-muted mb-0">Kegunaan</small> <br>
                            {{ $product->utility }}
                        </li>
                        <li class="list-group-item">
                            <small class="text-muted mb-0">Kualitas</small> <br>
                            {{ $product->quality }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-2 order-1">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <small class="text-muted mb-0">Nama Produk</small> <br>
                            {{ $product->name }}
                        </li>
                        <li class="list-group-item">
                            <small class="text-muted mb-0">Kategori Produk</small> <br>
                            {{ $product->category->name }}
                        </li>
                        <li class="list-group-item">
                            <small class="text-muted mb-0">Deskripsi</small> <br>
                            {!! $product->description !!}
                        </li>
                        <li class="list-group-item">
                            <small class="text-muted mb-0">Link Youtube</small> <br>
                            <iframe src="{{ $product->youtube_link }}" frameborder="0" width="100%"
                                height="400"></iframe>
                        </li>
                    </ul>
                    <div class="mb-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-sm fade" id="productImageModal" tabindex="-1" aria-labelledby="productImageModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productImageModalLabel">Tambah Gambar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="productImageForm" method="POST" action="{{ url('admin/image/produk') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="product_id" name="product_id"
                            placeholder="Product ID" value="{{ $product->id }}" required>

                        <div class="mb-3">
                            <img loading="lazy" id="previewThumbnail" class="preview shadow w-100"
                                src="https://placehold.co/300x250" alt="Preview">

                            <div class="bg-white position-relative overflow-hidden">
                                <input type="file" class="position-absolute z-0 top-0" id="image" name="image"
                                    placeholder="Gambar" accept="image/*" onchange="previewImage(this)" required>
                                <label for="image" class="btn btn-sm btn-light shadow d-block py-2">Tambahkan
                                    Gambar</label>
                            </div>
                            <p id="infoThumbnail" class="text-center lh-1 mt-1" hidden>
                                <small>
                                    Klik untuk mengganti gambar sebelumnya.
                                </small>
                            </p>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="alt" name="alt"
                                placeholder="Alt Text" required>
                            <label for="alt">Alt <span class="text-danger">*</span></label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary"><i
                                    class="mdi mdi-content-save me-2"></i>Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
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

        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('#gallery');
            splide.mount();
        });
    </script>
@endsection
