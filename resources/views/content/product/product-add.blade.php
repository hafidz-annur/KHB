@extends('layouts/contentNavbarLayout')

@section('title', 'Tambah Produk')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary">
            <h5 class="m-0 text-white">
                <i class="mdi mdi-cube me-2"></i>
                Tambahkan Produk
            </h5>
            <a href="{{ route('produk.index') }}" class="btn btn-sm btn-light py-1 px-2">
                <i class="mdi mdi-arrow-left me-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <small class="text-danger"><strong>Oops</strong>, {{ $error }}</small>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="{{ url('admin/produk') }}" class="mt-3">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                        value="{{ old('name') }}">
                    <label for="name">Nama Produk <span class="text-danger">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="description" id="description" placeholder="Deskripsi">{{ old('description') }}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" name="product_category_id" id="product_category_id"
                                aria-label="Product Category">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('product_category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="product_category_id">Kategori <span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="dimension" name="dimension" placeholder="Dimensi"
                                value="{{ old('dimension') }}">
                            <label for="dimension">Dimensi</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="utility" name="utility" placeholder="Kegunaan"
                                value="{{ old('utility') }}">
                            <label for="utility">Kegunaan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="quality" name="quality" placeholder="Kualitas"
                                value="{{ old('quality') }}">
                            <label for="quality">Kualitas</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="url" class="form-control" id="youtube_link" name="youtube_link"
                        placeholder="YouTube Link" value="{{ old('youtube_link') }}">
                    <label for="youtube_link">YouTube Link</label>
                    <small>Contoh: https://youtu.be/pRiOynjnAJU?si=PAYpaGOckKdsL3VB</small>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary"><i
                            class="mdi mdi-content-save me-2"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
