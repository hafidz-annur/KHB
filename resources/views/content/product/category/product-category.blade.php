@extends('layouts/contentNavbarLayout')

@section('title', 'Kategori Produk')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary">
            <h5 class="m-0 text-white">
                <i class="mdi mdi-cube me-2"></i>
                Kategori Produk
            </h5>
            <button class="btn btn-sm btn-light py-1 px-2" data-bs-toggle="modal" data-bs-target="#categoryModal"
                onclick="resetForm()">
                <i class="mdi mdi-plus me-2"></i>
                Tambah
            </button>
        </div>
        <div class="card-body">
            <table class="table datatables">
                <thead>
                    <tr>
                        <th class="text-start">No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Thumbnail</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <td class="text-start">{{ $loop->iteration }}</td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {!! Str::limit($item->description, 30) !!}
                            </td>
                            <td class="text-end">
                                <img loading="lazy" src="{{ asset('uploaded_files/category/' . $item->thumbnail) }}"
                                    alt="{{ $item->alt }}" class="shadow"
                                    style="width: 150px; height:80px; object-fit:cover; border-radius:10px;">
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            onclick="editData('{{ url('admin/kategori/produk') . '/' . $item->id }}')">
                                            <i class="mdi mdi-pencil-outline me-1"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"
                                            onclick="confirmation('delete', '{{ url('admin/kategori/produk/') . '/' . $item->id }}')"><i
                                                class="mdi mdi-trash-can-outline me-1"></i> Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('content.product.category.product-category-add')
@endsection
