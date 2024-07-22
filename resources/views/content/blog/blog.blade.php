@extends('layouts/contentNavbarLayout')

@section('title', 'Artikel')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary">
            <h5 class="m-0 text-white">
                <i class="mdi mdi-newspaper me-2"></i>
                Artikel
            </h5>
            <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-light py-1 px-2 step-1">
                <i class="mdi mdi-plus me-2"></i>
                Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table datatables">
                <thead>
                    <tr>
                        <th class="text-start">No</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Deskripsi</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $item)
                        <tr>
                            <td class="text-start">{{ $loop->iteration }}</td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>{{ $item->slug }}</td>
                            <td>
                                {!! Str::limit($item->description, 30) !!}
                            </td>
                            <td class="text-center">
                                <img loading="lazy" src="{{ asset('uploaded_files/blog/' . $item->thumbnail) }}"
                                    alt="{{ $item->title }}" style="width: 100px; height:80px; object-fit:cover;"
                                    class="rounded shadow">
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
                                            onclick="confirmation('edit', '{{ url('admin/artikel/status') . '/' . $item->id }}')">
                                            <i class="mdi {{ $item->is_active ? 'mdi-close' : 'mdi-check' }} me-1"></i>
                                            {{ $item->is_active ? 'Tidak di-aktifkan' : 'Aktifkan' }}
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            onclick="editData('{{ url('admin/artikel') . '/' . $item->id }}')">
                                            <i class="mdi mdi-pencil-outline me-1"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"
                                            onclick="confirmation('delete', '{{ url('admin/artikel/') . '/' . $item->id }}')"><i
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

    @include('content.blog.blog-edit')
@endsection


@push('script-page')
    <script>
        // Cek apakah panduan sudah dilihat di session storage
        if (!sessionStorage.getItem('artikel-intro')) {
            // Membuat instance IntroJs
            var intro = introJs();
            // Menentukan langkah-langkah panduan
            intro.setOptions({
                steps: [{
                        title: 'Menambahkan Artikel',
                        element: document.querySelector('.step-1'),
                        intro: "Klik tombol ini untuk menambahkan artikel baru, lengkapi data berdasarkan bidang yang ada di formulir.",
                        position: 'left'
                    },
                    {
                        title: 'Daftar Aksi',
                        element: document.querySelector('.step-2'),
                        intro: "Anda dapat meng-aktifkan/non-aktifkan, mengedit dan menghapus artikel yang terdapat di daftar artikel.",
                        position: 'left'
                    },
                ]
            });

            // Memulai panduan
            intro.start();

            // Setelah panduan selesai, tandai di session storage
            // intro.oncomplete(function() {
            //     sessionStorage.setItem('artikel-intro', 'true');
            // });

        }
    </script>
@endpush
