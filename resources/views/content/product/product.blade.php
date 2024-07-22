@extends('layouts/contentNavbarLayout')

@section('title', 'Produk')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary">
            <h5 class="m-0 text-white">
                <i class="mdi mdi-cube me-2"></i>
                Produk
            </h5>
            <a href="{{ route('produk.create') }}" class="btn btn-sm btn-light py-1 px-2 step-1">
                <i class="mdi mdi-plus me-2"></i>
                Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table datatables">
                <thead>
                    <tr>
                        <th class="text-start">No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aktif</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td class="text-start">{{ $loop->iteration }}</td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->category->name }}
                            </td>
                            <td>
                                {!! Str::limit($item->description, 30) !!}
                            </td>
                            <td class="text-center">
                                <div class="d-flex">
                                    @foreach ($item->image as $sub_item)
                                        <img loading="lazy" src="{{ asset('uploaded_files/product/' . $sub_item->image) }}"
                                            alt="{{ $sub_item->alt }}" class="shadow"
                                            style="width:40px; height:40px; border-radius:100%; margin-left:-15px;">
                                    @endforeach
                                </div>
                            </td>
                            <td class="text-center">
                                @if ($item->is_active)
                                    <i class="mdi mdi-check-circle-outline text-success" data-bs-toggle="tooltip"
                                        data-bs-title="Aktif"></i>
                                @else
                                    <i class="mdi mdi-close-circle-outline text-danger" data-bs-toggle="tooltip"
                                        data-bs-title="Tidak Aktif"></i>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="dropdown step-2">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item {{ $item->is_active ? 'text-warning' : 'text-success' }}"
                                            href="javascript:void(0);"
                                            onclick="confirmation('edit', '{{ url('admin/produk/status') . '/' . $item->id }}')">
                                            <i class="mdi {{ $item->is_active ? 'mdi-close' : 'mdi-check' }} me-1"></i>
                                            {{ $item->is_active ? 'Tidak di-aktifkan' : 'Aktifkan' }}
                                        </a>
                                        <a class="dropdown-item" href="{{ url('admin/produk/') . '/' . $item->id }}">
                                            <i class="mdi mdi-eye me-1"></i>
                                            Lihat Detail
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            onclick="editData('{{ url('admin/produk') . '/' . $item->id . '/edit' }}')">
                                            <i class="mdi mdi-pencil-outline me-1"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"
                                            onclick="confirmation('delete', '{{ url('admin/produk/') . '/' . $item->id }}')"><i
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

    <!-- Modal -->
    <div class="modal modal-lg fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="headerModal">Tambahkan Produk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="productForm" method="POST" action="{{ url('admin/produk') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="hidden" id="product_id">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Judul" required>
                                    <label for="name">Nama Produk <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="product_category_id" id="product_category_id"
                                        aria-label="Product Category" required>
                                        <option selected>Pilih Kategori</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="product_category_id">Kategori <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" style="height: 100px;"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="dimension" name="dimension"
                                placeholder="Dimensi">
                            <label for="dimension">Dimensi</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="utility" name="utility"
                                        placeholder="Kegunaan">
                                    <label for="utility">Kegunaan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="quality" name="quality"
                                        placeholder="Kualitas">
                                    <label for="quality">Kualitas</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control" id="youtube_link" name="youtube_link"
                                placeholder="Kualitas">
                            <label for="youtube_link">Link Youtube</label>
                            <small>Contoh: https://youtu.be/pRiOynjnAJU?si=PAYpaGOckKdsL3VB</small>
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
@endsection


@push('script-page')
    <script>
        function editData(url) {
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#productModal').modal('show');
                    setTimeout(() => {
                        $('#headerModal').html('Edit Produk')
                        $('#productForm').attr('action', '{{ url('admin/produk') }}' + '/' + response
                            .id);
                        $('#productForm').append('<input type="hidden" name="_method" value="PUT">');
                        $('#product_id').val(response.id);
                        $('#name').val(response.name);
                        $('#product_category_id').val(response.product_category_id);
                        myEditor.setData(response.description);
                        $('#dimension').val(response.dimension);
                        $('#utility').val(response.utility);
                        $('#quality').val(response.quality);
                        $('#youtube_link').val(response.youtube_link);
                    }, 1000);
                },
            });
        }
    </script>

    <script>
        // Cek apakah panduan sudah dilihat di session storage
        if (!sessionStorage.getItem('produk-intro')) {
            // Membuat instance IntroJs
            var intro = introJs();
            // Menentukan langkah-langkah panduan
            intro.setOptions({
                steps: [{
                        title: 'Menambahkan Produk',
                        element: document.querySelector('.step-1'),
                        intro: "Klik tombol ini untuk menambahkan produk baru, lengkapi data berdasarkan bidang yang ada di formulir.",
                        position: 'left'
                    },
                    {
                        title: 'Daftar Aksi',
                        element: document.querySelector('.step-2'),
                        intro: "Anda dapat meng-aktifkan/non-aktifkan, melihat detail, mengedit dan menghapus produk yang terdapat di daftar produk.",
                        position: 'left'
                    },
                ]
            });

            // Memulai panduan
            intro.start();

            // Setelah panduan selesai, tandai di session storage
            // intro.oncomplete(function() {
            //     sessionStorage.setItem('produk-intro', 'true');
            // });

        }
    </script>
@endpush
