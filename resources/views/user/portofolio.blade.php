@extends('layouts_user.main')
@section('title', 'Portofolio | KH BETON')
@section('meta')
    <meta name="description"
        content="KH Beton - High Performance Concrete, Upgrade Your Profit With Quality, High Performance Concrete" />
    <meta name="keywords"
        content="kansteen solo, kansteen boyolali, pagar panel solo, pagar panel boyolali, saluran drainase boyolali, u-ditch boyolali, u-ditch solo, box culvert boyolali, box culvert solo, ready mix, wet mix, dry mix, ready mix boyolali, precast, precast boyolali, precast solo, precast jawa tengah, beton jawa tengah, paving jawa tengah, paving boyolali, paving solo, beton boyolali, u-ditch, box culvert, paving, barrier, boyolali,pagar panel, solo, surakarta, industri, manufaktur, khbeton, high, performance, concrete, upgrade, your, profit, with, quality, precast, wetcast, drycast, mutu, k-350, k-700, durability" />
    <meta name="author" content="KH Beton" />
@endsection
@section('banner')
    <!-- Header Start -->
    <img loading="lazy" src="{{ asset('assets/img/KH_Beton/portofolio/3.jpg') }}" alt="Portofolio KH Beton" class="banner">
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Portofolio Kami</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Portofolio</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    {{-- Portofolio Start  --}}
    <div class="container my-5 px-4">
        <div class="row">
            <div class="col-12 mt-md-0 mt-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Kekuatan dan Kualitas dalam Setiap Proyek!</h1>
                    <p class="mb-0">
                        Portofolio KH Beton menunjukkan dedikasi kami dalam menyediakan beton berkualitas untuk berbagai
                        proyek konstruksi. Dari desain inovatif hingga implementasi presisi, kami membawa standar tertinggi
                        dalam setiap pekerjaan.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-3">
            @foreach ($portofolios as $item)
                <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded border-bottom border-5 border-danger h-100">
                        <div class="service-img rounded-top">
                            <img loading="lazy" src="{{ asset('uploaded_files/portofolio/' . $item->thumbnail) }}"
                                class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="rounded-bottom bg-light p-4">
                            <div class="text-center">
                                <h6 class="mb-4 fw-bold text-uppercase">
                                    {{ $item->title }}
                                </h6>
                                <p class="mb-1">
                                    <i class="fas fa-map-pin"></i> <br>
                                    {{ $item->location }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $portofolios->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
    {{-- Portofolio End  --}}

    @include('layouts_user.cta')
@endsection
