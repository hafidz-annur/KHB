@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-md-7">
                <div class="row g-3 step-1">
                    <div class="col-md-4 col-6">
                        <div class="card h-100 step-1">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
                                <div
                                    class="mdi mdi-cube mdi-24px text-white bg-primary rounded rounded-circle p-2 d-inline-block">
                                </div>
                                <h4 class="fw-bold mb-0">{{ $dashboard['products'] }}</h4>
                            </div>
                            <div class="card-footer bg-primary">
                                <a href="{{ url('admin/produk') }}">
                                    <h6 class="mb-0 text-white text-center">
                                        Produk
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
                                <div
                                    class="mdi mdi-post-outline mdi-24px text-white bg-secondary rounded rounded-circle p-2 d-inline-block">
                                </div>
                                <h4 class="fw-bold mb-0">{{ $dashboard['blogs'] }}</h4>
                            </div>
                            <div class="card-footer bg-secondary">
                                <a href="{{ url('admin/artikel') }}">
                                    <h6 class="mb-0 text-white text-center">
                                        Artikel
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
                                <div
                                    class="mdi mdi-tag-check-outline mdi-24px text-white bg-warning rounded rounded-circle p-2 d-inline-block">
                                </div>
                                <h4 class="fw-bold mb-0">{{ $dashboard['portofolios'] }}</h4>
                            </div>
                            <div class="card-footer bg-warning">
                                <a href="{{ url('admin/portofolio') }}">
                                    <h6 class="mb-0 text-white text-center">
                                        Portofolio
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
                                <div
                                    class="mdi mdi-view-gallery-outline mdi-24px text-white bg-info rounded rounded-circle p-2 d-inline-block">
                                </div>
                                <h4 class="fw-bold mb-0">{{ $dashboard['galleries'] }}</h4>
                            </div>
                            <div class="card-footer bg-info">
                                <a href="{{ url('admin/galeri') }}">
                                    <h6 class="mb-0 text-white text-center">
                                        Galeri
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
                                <div
                                    class="mdi mdi mdi-account-outline mdi-24px text-white bg-danger rounded rounded-circle p-2 d-inline-block">
                                </div>
                                <h4 class="fw-bold mb-0">{{ $dashboard['clients'] }}</h4>
                            </div>
                            <div class="card-footer bg-danger">
                                <a href="{{ url('admin/klien') }}">
                                    <h6 class="mb-0 text-white text-center">
                                        Klien
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card h-100">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-3">
                                <div
                                    class="mdi mdi-message-outline mdi-24px text-primary bg-light rounded rounded-circle p-2 d-inline-block">
                                </div>
                                <h4 class="fw-bold mb-0 text-primary">{{ $dashboard['contacts'] }}</h4>
                            </div>
                            <div class="card-footer bg-light">
                                <a href="{{ url('admin/kontak') }}">
                                    <h6 class="mb-0 text-primary text-center">
                                        Kontak
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row step-2 my-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header py-2 fw-bold">
                                <i class="mdi mdi-message-outline me-2"></i>
                                Kontak Terakhir
                            </div>

                            <div class="table-responsive">
                                <table class="table" nowrap>
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="text-white">Name</th>
                                            <th class="text-white">Nomor HP</th>
                                            <th class="text-white">Pesan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dashboard['latest_contact'] as $item)
                                            <tr>
                                                <td>
                                                    <i class="mdi mdi-account me-1"></i>
                                                    {{ $item->name }}
                                                </td>
                                                <td>
                                                    {{ $item->phone_number }}
                                                </td>
                                                <td>
                                                    {{ $item->message }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 step-3">
                <div class="card">
                    <div class="card-header py-2 fw-bold">
                        <i class="mdi mdi-message-outline me-2"></i>
                        Artikel Terakhir
                    </div>

                    <div class="table-responsive">
                        <table class="table" nowrap>
                            <thead class="bg-danger">
                                <tr>
                                    <th class="text-white">Judul</th>
                                    <th class="text-white">Jumlah Pelihat</th>
                                    <th class="text-white">Dibuat Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dashboard['latest_blog'] as $item)
                                    <tr>
                                        <td>
                                            {{ $item->title }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->viewed }}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->translatedFormat('l, d F Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-page')
    <script>
        // Cek apakah panduan sudah dilihat di session storage
        if (!sessionStorage.getItem('home-intro')) {
            // Membuat instance IntroJs
            var intro = introJs();
            // Menentukan langkah-langkah panduan
            intro.setOptions({
                steps: [{
                        title: 'Selamat Datang',
                        intro: "Ini adalah area admin, disini anda bisa menambahkan, mengedit dan menghapus konten website KH Beton",
                        position: 'bottom'
                    },
                    {
                        title: 'Total Record',
                        element: document.querySelector('.step-1'),
                        intro: "Ini adalah total record aktif disetiap fitur.",
                        position: 'bottom'
                    },
                    {
                        title: 'Kontak Terakhir',
                        element: document.querySelector('.step-2'),
                        intro: "Anda dapat melihat 5 kontak terbaru dari klien.",
                        position: 'top'
                    },
                    {
                        title: 'Artikel Terakhir',
                        element: document.querySelector('.step-3'),
                        intro: "Terakhir, ini adalah 5 artikel terbaru yang sudah anda publish.",
                        position: 'left'
                    },
                    {
                        title: 'Pengaturan Akun',
                        element: document.querySelector('.step-akun'),
                        intro: "Klik tombol ini untuk memperbahaarui data profil KH Beton, mengganti password dan keluar dari dashboard admin.",
                        position: 'left'
                    }
                ]
            });

            // Memulai panduan
            intro.start();

            // Setelah panduan selesai, tandai di session storage
            // intro.oncomplete(function() {
            //     sessionStorage.setItem('home-intro', 'true');
            // });
        }
    </script>
@endpush
