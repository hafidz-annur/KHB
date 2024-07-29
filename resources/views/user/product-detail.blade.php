@extends('layouts_user.main')
@section('title', $product->name . ' | KH BETON')
@section('meta')
    <meta name="description" content="{!! Str::limit($product->description, 100) !!}" />
    <meta name="keywords"
        content="kansteen solo, kansteen boyolali, pagar panel solo, pagar panel boyolali, saluran drainase boyolali, u-ditch boyolali, u-ditch solo, box culvert boyolali, box culvert solo, ready mix, wet mix, dry mix, ready mix boyolali, precast, precast boyolali, precast solo, precast jawa tengah, beton jawa tengah, paving jawa tengah, paving boyolali, paving solo, beton boyolali, u-ditch, box culvert, paving, barrier, boyolali,pagar panel, solo, surakarta, industri, manufaktur, khbeton, high, performance, concrete, upgrade, your, profit, with, quality, precast, wetcast, drycast, mutu, k-350, k-700, durability" />
    <meta name="author" content="KH Beton" />
@endsection
@section('style')
    <style>
        .splide__slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .splide__slide {
            opacity: 0.6;
        }

        .splide__slide.is-active {
            opacity: 1;
        }

        .product-detail {
            height: 10vh;
        }

        @media (max-width: 600) {
            .product-detail {
                height: 1vh !important;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
        integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"
        integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var main = new Splide('#main-carousel', {
                type: 'fade',
                rewind: true,
                pagination: false,
                arrows: false,
            });

            var thumbnails = new Splide('#thumbnail-carousel', {
                fixedWidth: 100,
                fixedHeight: 60,
                gap: 10,
                rewind: true,
                pagination: false,
                arrows: false,
                isNavigation: true,
                breakpoints: {
                    600: {
                        fixedWidth: 60,
                        fixedHeight: 44,
                    },
                },
            });

            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();
        });
    </script>
@endsection

@section('banner')
    <!-- Header Start -->
    <div class="container-fluid product-detail">
    </div>
    <!-- Header End -->

    {{-- Product Start  --}}
    <div class="container py-5 px-4">
        <div class="row g-5">
            <div class="col-md-12">
                <div class="row g-5">
                    <div class="col-md-5">
                        <section id="main-carousel" class="splide mb-3"
                            aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach ($product->image as $item)
                                        <li class="splide__slide">
                                            <img loading="lazy" src="{{ asset('uploaded_files/product/' . $item->image) }}"
                                                alt="{{ $item->alt }}">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                        <section id="thumbnail-carousel" class="splide"
                            aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach ($product->image as $item)
                                        <li class="splide__slide">
                                            <img loading="lazy" src="{{ asset('uploaded_files/product/' . $item->image) }}"
                                                alt="{{ $item->alt }}">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                        <div class="my-4">
                            <h5 class="text-muted fw-bold">Spesifikasi Produk</h5>
                            <table class="table" border="0">
                                <tr>
                                    <th>
                                        Ukuran Dimensi (P x L x T)
                                    </th>
                                    <td>
                                        {{ $product->dimension }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Penggunaan
                                    </th>
                                    <td>{{ $product->utility }}</td>
                                </tr>
                                <tr>
                                    <th>
                                        Kualitas Mutu
                                    </th>
                                    <td>
                                        {{ $product->quality }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2 class="mb-1">{{ $product->name }}</h2>
                        <div class="row align-items-center g-2">
                            <div class="col-md-6">
                                <div class="d-flex gap-1">
                                    <span class="badge rounded-pill bg-primary text-nowrap py-1">
                                        <i class="fas fa-tag me-1"></i>
                                        {{ $product->category->name }}
                                    </span>
                                    <span class="badge rounded-pill bg-dark text-nowrap py-1px-2">
                                        <i class="fas fa-eye me-1"></i>
                                        {{ $product->viewed }}x Dilihat
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 text-md-end text-start">
                                <div class="shareon">
                                    <a class="facebook"></a>
                                    <a class="linkedin"></a>
                                    <a class="twitter"></a>
                                    <a class="whatsapp"></a>
                                    <a class="copy-url"></a>
                                </div>
                            </div>
                        </div>

                        <div class="my-4">
                            <h5 class="text-muted fw-bold">Deskripsi</h5>
                            {!! $product->description !!}
                        </div>
                        @if ($product->youtube_link)
                            <hr>
                            <div class="my-4">
                                <iframe width="100%" height="400"
                                    src="https://www.youtube.com/embed/pRiOynjnAJU?si=GhsiuNEf_TfKDoUE"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h4>Produk Lainnya</h4>

                <div class="row">
                    @foreach ($others as $item)
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
            </div>
        </div>
    </div>
    {{-- Product End  --}}

    @include('layouts_user.cta')
@endsection
