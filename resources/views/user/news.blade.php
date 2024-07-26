@extends('layouts_user.main')
@section('title', 'Berita | KH BETON')
@section('meta')
    <meta name="description"
        content="KH Beton - High Performance Concrete, Upgrade Your Profit With Quality, High Performance Concrete" />
    <meta name="keywords"
        content="kansteen solo, kansteen boyolali, pagar panel solo, pagar panel boyolali, saluran drainase boyolali, u-ditch boyolali, u-ditch solo, box culvert boyolali, box culvert solo, ready mix, wet mix, dry mix, ready mix boyolali, precast, precast boyolali, precast solo, precast jawa tengah, beton jawa tengah, paving jawa tengah, paving boyolali, paving solo, beton boyolali, u-ditch, box culvert, paving, barrier, boyolali,pagar panel, solo, surakarta, industri, manufaktur, khbeton, high, performance, concrete, upgrade, your, profit, with, quality, precast, wetcast, drycast, mutu, k-350, k-700, durability" />
    <meta name="author" content="KH Beton" />
@endsection
@section('banner')
    <!-- Header Start -->
    <img loading="lazy" src="{{ asset('assets/img/KH_Beton/portofolio/2.jpg') }}" alt="Berita KH Beton" class="banner">
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Berita Kami</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Berita</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    {{-- Portofolio Start  --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Apa yang Baru di KH Beton?</h1>
                    <p class="mb-0">
                        Temukan berita dan update terbaru dari KH Beton. Kami bangga dengan inovasi kami dan ingin berbagi
                        pencapaian terbaru dengan Anda.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-md-6">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group has-search">
                        <span class="fas fa-search form-control-feedback"></span>
                        <input type="text" name="search" class="form-control" placeholder="Search"
                            value="{{ Request::GET('search') }}" onchange="this.form.submit()">
                    </div>
                </form>
            </div>
        </div>
        <div class="row g-3">
            @foreach ($blogs as $item)
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item rounded border-bottom border-5 border-success shadow">
                        <div class="blog-img">
                            <img loading="lazy" src="{{ asset('uploaded_files/blog/' . $item->thumbnail) }}"
                                class="img-fluid w-100" alt="{{ $item->alt }}">
                        </div>
                        <div class="blog-centent border-0 p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="badge bg-primary mb-0">
                                    <i class="fa fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y') }}
                                </small>
                                <small class="badge bg-dark mb-0">
                                    <i class="fas fa-eye me-1"></i>
                                    {{ $item->viewed }}x
                                </small>
                            </div>
                            <a href="#" class="h5">
                                {{ $item->title }}
                            </a>
                            <p class="my-4">
                                {!! Str::limit($item->description, 100) !!}
                            </p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('berita/' . $item->slug) }}"
                                    class="btn btn-sm btn-primary rounded-pill text-white py-1 px-4">Lanjut
                                    Baca</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $blogs->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
    {{-- Portofolio End  --}}

    @include('layouts_user.cta')
@endsection
