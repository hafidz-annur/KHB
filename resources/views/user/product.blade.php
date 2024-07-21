@extends('layouts_user.main')

@section('banner')
    <!-- Header Start -->
    <img loading="lazy" src="{{ asset('assets/img/KH_Beton/portofolio/1.jpg') }}" alt="Produk KH Beton" class="banner">
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Kami</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Produk</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    {{-- Product Start  --}}
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-4">Solusi Tepat untuk Proyek Anda!</h1>
                <p class="mb-0">
                    KH Beton memberikan hasil yang konsisten dan dapat diandalkan untuk segala jenis proyek konstruksi, baik
                    besar maupun kecil. Dengan formulasi khusus dan pengiriman tepat waktu, kami memastikan kebutuhan Anda
                    terpenuhi tanpa kompromi.
                </p>
            </div>
            <form action="{{ route('user-product') }}" method="POST">
                @csrf
                <div class="row justify-content-between mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-md-3">
                        <select name="category" class="form-control select2" onchange="this.form.submit()">
                            <option></option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}"
                                    {{ Request::GET('category') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group has-search">
                            <span class="fas fa-search form-control-feedback"></span>
                            <input type="text" name="search" class="form-control" placeholder="Cari"
                                value="{{ Request::GET('search') }}" onchange="this.form.submit()">
                        </div>
                    </div>
                </div>
            </form>
            <div class="row g-4">
                @if (count($products) == 0)
                    <div class="col-12 my-4 text-center">
                        <h5>Mohon maaf, data yang anda cari tidak tersedia!</h5>
                        <h6>Silahkan coba lagi.</h6>
                    </div>
                @endif
                @foreach ($products as $item)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-card rounded border-bottom border-5 border-primary shadow">
                            <a href="{{ url('produk/' . $item->slug) }}">
                                <div class="relative">
                                    <img loading="lazy"
                                        src="{{ asset('uploaded_files/product/' . $item->image[0]->image) }}"
                                        class="img-fluid w-100 relative z-1" alt="{{ $item->image[0]->alt }}">
                                </div>
                                <div class="d-flex gap-1 px-2 justify-content-between mt-2">
                                    <small>
                                        <span class="badge rounded-pill bg-primary text-nowrap py-1">
                                            <i class="fas fa-tag me-1"></i>
                                            {{ $item->category->name }}
                                        </span>
                                    </small>
                                    <small>
                                        <span class="badge rounded-pill bg-dark text-nowrap py-1px-2">
                                            <i class="fas fa-eye me-1"></i>
                                            {{ $item->viewed }}x
                                        </span>
                                    </small>
                                </div>
                                <div class="border-0 p-2">
                                    <p class="h6 mb-1">
                                        {{ $item->name }}
                                    </p>
                                    <small class="text-muted">
                                        {{ $item->utility }}
                                    </small> <br>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $products->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
    {{-- Product End  --}}

    @include('layouts_user.cta')
@endsection
