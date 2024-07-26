@extends('layouts_user.main')
@section('title', 'Tentang Kami | KH BETON')
@section('meta')
    <meta name="description"
        content="KH Beton - High Performance Concrete, Upgrade Your Profit With Quality, High Performance Concrete" />
    <meta name="keywords"
        content="kansteen solo, kansteen boyolali, pagar panel solo, pagar panel boyolali, saluran drainase boyolali, u-ditch boyolali, u-ditch solo, box culvert boyolali, box culvert solo, ready mix, wet mix, dry mix, ready mix boyolali, precast, precast boyolali, precast solo, precast jawa tengah, beton jawa tengah, paving jawa tengah, paving boyolali, paving solo, beton boyolali, u-ditch, box culvert, paving, barrier, boyolali,pagar panel, solo, surakarta, industri, manufaktur, khbeton, high, performance, concrete, upgrade, your, profit, with, quality, precast, wetcast, drycast, mutu, k-350, k-700, durability" />
    <meta name="author" content="KH Beton" />
@endsection
@section('banner')
    <!-- Header Start -->
    <img loading="lazy" src="{{ asset('assets/img/KH_Beton/portofolio/5.jpg') }}" alt="Tentang KH Beton" class="banner">
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tentang Kami</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Tentang</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-2 overflow-hidden">
        <div class="container py-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                    <img loading="lazy" src="{{ asset('assets') }}/img/KH_Beton/about_us/image-01-full.jpg"
                        class="rounded w-100" style="object-fit: cover;" alt="Image">
                </div>
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="section-title text-start">
                        <h1 class="display-6 mb-4">Informasi Umum
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
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center my-5">
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start">
                        <h1 class="display-6 mb-4">Sejarah Berdirinya KH BETON
                        </h1>
                        <p class="mb-4">
                            Berawal dari usaha industri beton sederhana yang didirikan pada tahun 1990 yang terletak di
                            provinsi Sumatera Selatan dengan nama "BUMI MAS".
                        </p>
                        <p class="mb-4">
                            Kemudian pada tahun 2010 perushaan industri Beton yang berlokasi di Sumatera Selatan, berpindah
                            lokasi di Jawa Tengah, tepatnya di Boyolali dan berganti nama menjadi "MASTER BETON".
                        </p>
                        <p class="mb-4">
                            Untuk melerbarkan sayap dan mengembangkan produk - produk beton, pada Tahun 2014 berdirilah
                            divisi baru yang diberi nama KH Beton - High Performance Concrete, sebagai industri pra-cetak
                            Beton Bermutu Tinggi dengan didasari semangat "Innovative Concrete Industry"
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <img loading="lazy" src="{{ asset('assets') }}/img/KH_Beton/about_us/image-02-full.jpg"
                        class="rounded w-100" style="object-fit: cover;" alt="Image">
                </div>
            </div>
        </div>
    </div>

    {{-- Visi Misi  --}}
    <div class="cta py-4 wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-6">
                    <div class="section-title text-center">
                        <h1 class="display-6 mb-4 text-white">Visi
                        </h1>
                        <h6 class="h5 text-white text-start lh-base">
                            Menjadi Perusahaan Industri Beton yang menghasilkan produk berkualitas, dengan mengutamakan
                            "research and development" serta inovasi, sehingga menjadi perusahaan industri beton yang
                            betaraf Internasional.
                        </h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-title text-center">
                        <h1 class="display-6 mb-4 text-white">Misi
                        </h1>
                        <ul class="text-start text-white">
                            <li>Menghasilkan produk - produk inovatif dan berkualitas, yang dapat mengikuti perubahan dan
                                perkembangan zaman.
                            </li>
                            <li>Menjalin kerja sama dengan mengedepankan profesionalisme, integritas, kejujuran dan keadilan
                                yang berfokus pada kebutuhan pelanggan.</li>
                            <li>Mewujudkan SDM ketenagakerjaan yang kompeten, dan membuka akses kesempatan kerja yang lebih
                                luas.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Visi Misi  --}}

    <!-- Service Start -->
    <div class="container-fluid service py-2">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-4">Pelayanan Terbaik</h1>
                <p class="mb-0">
                    Kepuasan pelanggan merupakan salah satu bagian komitmen utama kami, demi memberikan pengalaman
                    terbaik. KH. Beton hadir dengan memberikan pelayanan terbaiknya
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
    <!-- About End -->
@endsection
