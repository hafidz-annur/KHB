@extends('layouts/contentNavbarLayout')

@section('title', 'Klien')

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
                <i class="mdi mdi-account me-2"></i>
                Klien
            </h5>
            <button class="btn btn-sm btn-light py-1 px-2 step-1" data-bs-toggle="modal" data-bs-target="#clientModal">
                <i class="mdi mdi-plus me-2"></i>
                Tambah
            </button>
        </div>
        <div class="card-body">
            <div class="row row-cols-md-5 row-cols-1 g-3 my-2">
                @foreach ($clients as $item)
                    <div class="col">
                        <div class="thumbnail position-relative overflow-hidden shadow">
                            <img loading="lazy" src="{{ asset('uploaded_files/client/' . $item->image) }}"
                                alt="{{ $item->alt }}" class="w-100 rounded" style="height:120px; object-fit:contain;">

                            {{-- Status  --}}
                            <div class="position-absolute" style="top:5px; left:5px;">
                                @if ($item->is_active)
                                    <i class="mdi mdi-check-circle-outline text-success" data-bs-toggle="tooltip"
                                        data-bs-title="Aktif"></i>
                                @else
                                    <i class="mdi mdi-close-circle-outline text-danger" data-bs-toggle="tooltip"
                                        data-bs-title="Tidak Aktif"></i>
                                @endif
                            </div>

                            {{-- Setting --}}
                            <div class="dropdown position-absolute step-2" style="top:5px; right:5px;">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical text-primary"></i></button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item {{ $item->is_active ? 'text-warning' : 'text-success' }}"
                                        href="javascript:void(0);"
                                        onclick="confirmation('edit', '{{ url('admin/klien/status') . '/' . $item->id }}')">
                                        <i class="mdi {{ $item->is_active ? 'mdi-close' : 'mdi-check' }} me-1"></i>
                                        {{ $item->is_active ? 'Tidak di-aktifkan' : 'Aktifkan' }}
                                    </a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);"
                                        onclick="confirmation('delete', '{{ url('admin/klien/') . '/' . $item->id }}')"><i
                                            class="mdi mdi-trash-can-outline me-1"></i> Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal modal-sm fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="clientModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="headerModal">Tambahkan Klien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="clientForm" method="POST" action="{{ url('admin/klien') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <img loading="lazy" id="previewThumbnail" class="preview shadow"
                                src="https://placehold.co/400x250" alt="Preview">

                            <div class="bg-white position-relative overflow-hidden">
                                <input type="file" class="position-absolute z-0 top-0" id="thumbnail" name="image"
                                    placeholder="Thumbnail" accept="image/*" onchange="previewImage(this)" required>
                                <label for="thumbnail" class="btn btn-sm btn-light shadow d-block py-2">Tambahkan
                                    Gambar <span class="text-danger">*</span></label>
                            </div>
                            <p id="infoThumbnail" class="text-center lh-1 mt-1" hidden>
                                <small>
                                    Klik untuk mengganti gambar sebelumnya.
                                </small>
                            </p>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="alt" name="alt" placeholder="Alt"
                                required>
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

@endsection


@push('script-page')
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
    <script>
        // Cek apakah panduan sudah dilihat di session storage
        if (!sessionStorage.getItem('klien-intro')) {
            // Membuat instance IntroJs
            var intro = introJs();
            // Menentukan langkah-langkah panduan
            intro.setOptions({
                steps: [{
                        title: 'Menambahkan Klien',
                        element: document.querySelector('.step-1'),
                        intro: "Klik tombol ini untuk menambahkan klien baru, lengkapi data berdasarkan bidang yang ada di formulir.",
                        position: 'left'
                    },
                    {
                        title: 'Daftar Aksi',
                        element: document.querySelector('.step-2'),
                        intro: "Anda dapat meng-aktifkan/non-aktifkan, mengedit dan menghapus klien yang terdapat di daftar klien.",
                        position: 'left'
                    },
                ]
            });

            // Memulai panduan
            intro.start();

            // Setelah panduan selesai, tandai di session storage
            // intro.oncomplete(function() {
            //     sessionStorage.setItem('klien-intro', 'true');
            // });

        }
    </script>
@endpush
