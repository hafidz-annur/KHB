@extends('layouts_user.main')
@section('title', 'Kontak Kami | KH BETON')
@section('meta')
    <meta name="description"
        content="KH Beton - High Performance Concrete, Upgrade Your Profit With Quality, High Performance Concrete" />
    <meta name="keywords"
        content="kansteen solo, kansteen boyolali, pagar panel solo, pagar panel boyolali, saluran drainase boyolali, u-ditch boyolali, u-ditch solo, box culvert boyolali, box culvert solo, ready mix, wet mix, dry mix, ready mix boyolali, precast, precast boyolali, precast solo, precast jawa tengah, beton jawa tengah, paving jawa tengah, paving boyolali, paving solo, beton boyolali, u-ditch, box culvert, paving, barrier, boyolali,pagar panel, solo, surakarta, industri, manufaktur, khbeton, high, performance, concrete, upgrade, your, profit, with, quality, precast, wetcast, drycast, mutu, k-350, k-700, durability" />
    <meta name="author" content="KH Beton" />
@endsection
@section('banner')
    <style>
        div>p {
            margin: 0;
            line-height: 1.25;
        }
    </style>
    <!-- Header Start -->
    <img loading="lazy" src="{{ asset('assets/img/KH_Beton/portofolio/4.jpg') }}" alt="Produk KH Beton" class="banner">
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kontak Kami</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Kontak Kami</li>
                </ol>
        </div>

    </div>
    <!-- Header End -->

    <div class="container my-5 px-4">
        <div class="row mt-md-0 mt-5">
            <div class="col-md-7 order-md-0 order-1 g-4">

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @foreach ($location as $key => $item)
                            <button class="nav-link {{ $key == '0' ? 'active' : '' }}" id="nav-home-tab-{{ $item->id }}"
                                data-bs-toggle="tab" data-bs-target="#nav-home-{{ $item->id }}" type="button"
                                role="tab" aria-controls="nav-home" aria-selected="true">
                                Alamat {{ $key + 1 }}
                            </button>
                        @endforeach
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    @foreach ($location as $key => $item)
                        <div class="tab-pane fade {{ $key == '0' ? 'show active' : '' }}" id="nav-home-{{ $item->id }}"
                            role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            {!! $item->google_maps_link !!}
                        </div>
                    @endforeach
                </div>

                <div class="card border-0 shadow mt-3 bg-dark text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-md-start text-center">
                                <i class="fas fa-envelope me-2"></i> {{ $profile->email }}
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fas fa-phone me-2"></i>
                                {{ $profile->wa_number_1 }}
                            </div>
                            <div class="col-md-3 text-md-end text-center">
                                <i class="fas fa-phone me-2"></i>
                                {{ $profile->wa_number_2 }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-1 order-0">
                @if (isset($_GET['success']))
                    <div class="card border-0 bg-primary shadow">
                        <div class="card-body text-center text-white">
                            <i class="fas fa-thumbs-up fa-2x mb-3"></i>
                            <h3 class="text-white">Terima Kasih</h3>
                            <p>
                                Silahkan tunggu, tim kami akan segera menghubungi anda.
                            </p>
                        </div>
                    </div>
                @else
                    <div class="card border-0 shadow">

                        <div class="card-body">
                            <h3 class="mb-3">
                                Hubungi Kami Sekarang
                            </h3>
                            <p>
                                Silakan hubungi kami untuk informasi lebih lanjut atau untuk menanyakan layanan kami.
                                Kami siap
                                membantu Anda dengan segala pertanyaan yang Anda miliki.
                            </p>
                            <form method="POST" action="{{ url('/kontak-kami') }}" class="mt-3">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nama" required>
                                    <label for="name">Nama</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" required>
                                    <label for="email">Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                                        placeholder="Nomor Telepon" required>
                                    <label for="phone_number">Nomor Telepon</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select" id="product_id" name="product_id" placeholder="Pilih Produk"
                                        required>
                                        <option selected></option>
                                        @foreach ($product as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="product_id">Pilih Produk</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" name="message" placeholder="Pesan" style="height: 100px;" required></textarea>
                                    <label for="message">Pesan</label>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary text-white py-1 rounded-pill">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        Kirim
                                        Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
