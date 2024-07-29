@extends('layouts_user.main')

@section('title', 'KH BETON - Upgrade Your Profit With Quality')
@section('meta')
    <meta name="description"
        content="KH Beton - High Performance Concrete, Upgrade Your Profit With Quality, High Performance Concrete" />
    <meta name="keywords"
        content="kansteen solo, kansteen boyolali, pagar panel solo, pagar panel boyolali, saluran drainase boyolali, u-ditch boyolali, u-ditch solo, box culvert boyolali, box culvert solo, ready mix, wet mix, dry mix, ready mix boyolali, precast, precast boyolali, precast solo, precast jawa tengah, beton jawa tengah, paving jawa tengah, paving boyolali, paving solo, beton boyolali, u-ditch, box culvert, paving, barrier, boyolali,pagar panel, solo, surakarta, industri, manufaktur, khbeton, high, performance, concrete, upgrade, your, profit, with, quality, precast, wetcast, drycast, mutu, k-350, k-700, durability" />
    <meta name="author" content="KH Beton" />
@endsection

@section('banner')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel bg-primary">
        @foreach ($banners as $item)
            <div class="header-carousel-item">
                <img loading="lazy" src="{{ asset('uploaded_files/banner/' . $item->thumbnail) }}" class="img-fluid w-100"
                    alt="{{ $item->alt }}" style="object-fit: cover; object-position:center;">

                <div class="card position-absolute border-0 shadow banner-title">
                    <div class="card-body">
                        <h2 class="text-capitalize text-white mb-3 fw-bold">
                            {{ $item->title }}
                        </h2>
                        <div class="mb-4 fs-5 text-white">
                            {!! $item->description !!}
                        </div>
                        <a class="btn btn-dark rounded-pill text-white py-2 px-5"
                            href="{{ $item->link }}">{{ $item->button_name }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Carousel End -->
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-fluid about bg-light py-2 overflow-hidden">
        <div class="container py-5 px-2">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img loading="lazy" src="{{ asset('assets') }}/img/KH_Beton/about_us/1.jpg"
                            class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img loading="lazy" src="{{ asset('assets') }}/img/KH_Beton/about_us/2.jpg"
                                class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="about-experience d-md-block d-none">Tingkatkan Keuntungan Anda dengan Kualitas yang
                            Unggul</div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-md-start text-center mb-5">
                        <div class="d-md-none d-block">
                            <div class="sub-style">
                                <h4 class="sub-title px-3 mb-0">Tentang Kami</h4>
                            </div>
                        </div>
                        <div class="d-md-block d-none">
                            <h4 class="sub-title pe-3 mb-0">Tentang Kami</h4>
                        </div>
                        <h1 class="display-6 mb-4">Kami telah memproduksi lebih dari 5000 produk beton tahun ini!
                        </h1>
                        <p class="mb-4">
                            KH Beton adalah perusahaan manufaktur yang bergerak di bidang Industri Beton Mutu Tinggi
                            (High Performance Concrete). Sebagai badan usaha swasta, KH Beton lahir dan memulai usaha
                            industri beton practak pada tahun 2014 dengan mengembangkan produk-produknya yang di dasari
                            oleh semangat "Innovative Concrete Industry".
                        </p>
                        <p class="d-md-block d-none">
                            Pengembangan produk - produk tersebut telah berhasil menghasilkan beberapa produk yang
                            inovatif. Dalam perkembangan produk-produknya, KH Beton selalu mengedepankan mutu dan
                            kualitas beton, dengan cara memilih bahan baku material yang berkualitas, menggunakan
                            peralatan yang mendukung, serta memiliki sumber daya manusia yang berpengalaman dan
                            profesional
                        </p>
                        <a href="/tentang-kami" class="btn btn-primary rounded-pill text-white py-2 px-5">Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid service py-2">
        <div class="container py-5 px-2">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Kenapa Harus Kami</h4>
                </div>
                <h1 class="display-6 mb-4">Pelayanan Terbaik</h1>
                <p class="mb-0">
                    Kepuasan pelanggan merupakan salah satu bagian komitmen utama kami, demi memberikan pengalaman
                    terbaik. <br> KH. Beton hadir dengan memberikan pelayanan terbaiknya
                </p>
            </div>
            <div class="row g-4 align-items-md-stretch justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 bg-light border-bottom border-5 border-primary">
                        <div class="service-img rounded-top position-relative" style="max-height: 150px;">
                            <img loading="lazy" src="{{ asset('assets') }}/img/KH_Beton/about_us/service-1.jpg"
                                class="img-fluid rounded-top w-100" alt="">
                            <h5 class="text-uppercase fw-bold text-white position-absolute">Kualitas</h5>
                        </div>
                        <div class="p-4">
                            <div class="text-center">
                                <p class="mb-0">
                                    Perushaan kami selalu memberikan kualitas terbaik karena kami mempunyai kualitas
                                    Standard Mutu Beton yaitu K350 sampai dengan K700.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 bg-light border-bottom border-5 border-primary">
                        <div class="service-img rounded-top position-relative" style="max-height: 150px;">
                            <img loading="lazy" src="{{ asset('assets') }}/img/KH_Beton/about_us/2.avif"
                                class="img-fluid rounded-top w-100" alt="">
                            <h5 class="text-uppercase fw-bold text-white position-absolute">Pengiriman</h5>
                        </div>
                        <div class="p-4">
                            <div class="text-center">
                                <p class="mb-0">
                                    Perusahaan kami mampu memastikan setiap produk yang kami kirim akan terjamin, karena
                                    dilakukan secara cepat dan tepat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 bg-light border-bottom border-5 border-primary">
                        <div class="service-img rounded-top position-relative" style="max-height: 150px;">
                            <img loading="lazy" src="{{ asset('assets') }}/img/KH_Beton/about_us/service-3.jpg"
                                class="img-fluid rounded-top w-100" alt="">
                            <h5 class="text-uppercase fw-bold text-white position-absolute">Harga</h5>
                        </div>
                        <div class="p-4">
                            <div class="text-center">
                                <p class="mb-0">
                                    Perusahaan kami mampu melahirkan harga yang kompetitif, dimana harga yang kami
                                    berikan berbanding lurus dengan kualitas produk yang kami tawarkan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 bg-light border-bottom border-5 border-primary">
                        <div class="service-img rounded-top position-relative" style="max-height: 150px;">
                            <img loading="lazy" src="{{ asset('assets') }}/img/KH_Beton/about_us/service-4.jpg"
                                class="img-fluid rounded-top w-100" alt="">
                            <h5 class="text-uppercase fw-bold text-white position-absolute">Inovatif</h5>
                        </div>
                        <div class="p-4">
                            <div class="text-center">
                                <p class="mb-0">
                                    Kami mampu memproduksi dan mengembangkan beberapa produk yang Inovatif, dan telah
                                    berhasil menjadi produk terkemuka di Pasar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Product Start -->
    <div class="container-fluid product py-3">
        <div class="container py-5 px-2">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Produk Kami</h4>
                </div>
                <h1 class="display-6 mb-4">Kualitas Terbaik untuk Anda</h1>
            </div>

        </div>
        <section class="splide" id="product" style="padding: 0 60px">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($categories as $item)
                        <li class="splide__slide wow fadeInUp" data-wow-delay="0.1s">
                            <a href="{{ url('produk?category=' . $item->id) }}">
                                <div class="card position-relative overflow-hidden category-card" style="height: 250px">
                                    <img loading="lazy" src="{{ asset('uploaded_files/category/' . $item->thumbnail) }}"
                                        alt="{{ $item->alt }}" class="w-100 rounded shadow"
                                        style="object-fit: cover">
                                    <div class="position-absolute text-center py-4 category-title">
                                        <h5 class=" fw-bold text-white text-uppercase mb-0">{{ $item->name }}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
    <!-- Product End -->

    <!-- Portofolio Start -->
    <div class="container-fluid portofolio py-5">
        <div class="container py-5 px-2">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Yang Kami Lakukan</h4>
                </div>
                <h1 class="display-6 mb-4">Portofolio Terbaru Kami</h1>
                <p class="mb-0">
                    Setiap proyek yang kami tangani adalah bukti dedikasi kami untuk memberikan hasil terbaik bagi
                    klien. Dengan pengalaman yang luas dan pendekatan inovatif, kami terus menghasilkan karya-karya yang
                    memenuhi standar tertinggi dan membawa kepuasan pelanggan.
                </p>
            </div>
            <div class="row g-4 justify-content-center align-item-strach">
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
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-danger rounded-pill text-white py-2 px-5" href="/portofolio">Lebih Banyak</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portofolio End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5 px-2">
            <div class="section-title mb-5">
                <div class="sub-style">
                    <h4 class="sub-title text-white px-3 mb-0">Klien Kami</h4>
                </div>
                <h1 class="display-6 mb-4 text-white">Mitra Terpercaya dalam Setiap Langkah</h1>
            </div>

            <section class="splide" id="testimonial">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($clients as $item)
                            <li class="splide__slide">
                                <div class="testimonial-item">
                                    <div class="mb-4">
                                        <img loading="lazy" src="{{ asset('uploaded_files/client/' . $item->image) }}"
                                            alt="{{ $item->alt }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5 px-2">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Berita TERKINI</h4>
                </div>
                <h1 class="display-6 mb-4">
                    Inovasi dan Pencapaian Terbaru Kami
                </h1>
                <p class="mb-0">
                    Kami dengan bangga mempersembahkan berita terbaru yang menyoroti inovasi dan pencapaian signifikan
                    yang telah kami raih. Dalam setiap langkah, kami berkomitmen untuk mendorong batasan dan
                    menghadirkan solusi terbaik bagi para klien kami.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($blogs as $item)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded border-bottom border-5 border-primary shadow">
                            <div class="blog-img">
                                <img loading="lazy" src="{{ asset('uploaded_files/blog/' . $item->thumbnail) }}"
                                    class="img-fluid w-100" alt="{{ $item->alt }}">
                            </div>
                            <div class="blog-centent border-0 p-4">
                                <p class="h5">
                                    {{ $item->title }}
                                </p>
                                <p class="my-4">
                                    {!! Str::limit($item->description, 100) !!}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i>
                                        {{ \Carbon\Carbon::parse($item->updated_at)->locale('id')->translatedFormat('l, d F Y') }}
                                    </p>
                                    <a href="{{ url('berita/' . $item->slug) }}"
                                        class="btn btn-primary rounded-pill text-white py-1 px-4">Lanjut
                                        Baca</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill text-white py-2 px-5" href="/berita">Lebih Banyak</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    @include('layouts_user.cta')

    {{-- Certificate Start  --}}
    <div class="container-fluid blog py-5 wow fadeInUp" data-wow-delay="0.3s">
        <div class="container py-5 px-2">
            <div class="section-title mb-5">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Sertifikasi</h4>
                </div>
                <p>
                    Memiliki sertifikasi adalah bukti komitmen kami terhadap kualitas tertinggi.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row row-cols-md-4 row-cols-2 justify-content-center g-3">
                        @foreach ($certificates as $item)
                            <div class="col text-center py-2">
                                <img loading="lazy" src="{{ asset('uploaded_files/certificate/' . $item->image) }}"
                                    class="img-fluid w-100 rounded" alt="{{ $item->alt }}"
                                    style="height: 60px; object-fit:contain">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Certificate End  --}}



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var product = new Splide('#product', {
                type: 'loop',
                autoplay: true,
                perPage: 3,
                perMove: 1,
                gap: 30,
                interval: 5000,
                pagination: false,
                padding: {
                    left: 50,
                    right: 50
                },
                breakpoints: {
                    640: {
                        perPage: 1,
                        gap: 5,
                        padding: {
                            left: 5,
                            right: 5
                        }
                    },
                }
            });
            product.mount();

            var testimonial = new Splide('#testimonial', {
                type: 'loop',
                autoplay: true,
                perPage: 5,
                perMove: 1,
                gap: 30,
                interval: 5000,
                arrows: false,
                breakpoints: {
                    640: {
                        perPage: 2,
                        gap: 10,
                        padding: {
                            left: 0,
                            right: 20
                        },
                    },
                }
            });
            testimonial.mount();
        });
    </script>
@endsection
