@extends('layouts_user.main')
@section('title', 'Galeri | KH BETON')
@section('meta')
    <meta name="description"
        content="KH Beton - High Performance Concrete, Upgrade Your Profit With Quality, High Performance Concrete" />
    <meta name="keywords"
        content="kansteen solo, kansteen boyolali, pagar panel solo, pagar panel boyolali, saluran drainase boyolali, u-ditch boyolali, u-ditch solo, box culvert boyolali, box culvert solo, ready mix, wet mix, dry mix, ready mix boyolali, precast, precast boyolali, precast solo, precast jawa tengah, beton jawa tengah, paving jawa tengah, paving boyolali, paving solo, beton boyolali, u-ditch, box culvert, paving, barrier, boyolali,pagar panel, solo, surakarta, industri, manufaktur, khbeton, high, performance, concrete, upgrade, your, profit, with, quality, precast, wetcast, drycast, mutu, k-350, k-700, durability" />
    <meta name="author" content="KH Beton" />
@endsection
@section('style')
    <style>
        .lg-backdrop,
        .lg-outer .lg-thumb-outer {
            background: rgb(17, 126, 194) !important;
            background: linear-gradient(180deg, rgb(8, 68, 106) 0%, rgba(9, 66, 101, 0.855) 100%) !important;
        }

        .gallery-item,
        .gallery-item img {
            position: relative;
            overflow: hidden;
            transition: all .5s ease-in-out
        }

        .gallery-item:hover img {
            scale: 1.1
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css"
        integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lg-thumbnail.min.css"
        integrity="sha512-GRxDpj/bx6/I4y6h2LE5rbGaqRcbTu4dYhaTewlS8Nh9hm/akYprvOTZD7GR+FRCALiKfe8u1gjvWEEGEtoR6g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lg-zoom.min.css"
        integrity="sha512-vIrTyLijDDcUJrQGs1jduUCSVa3+A2DaWpVfNyj4lmXkqURVQJ8LL62nebC388QV3P4yFBSt/ViDX8LRW0U6uw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
        integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.min.js"
        integrity="sha512-BLW2Jrofiqm6m7JhkQDIh2olT0EBI58+hIL/AXWvo8gOXKmsNlU6myJyEkTy6rOAAZjn0032FRk8sl9RgXPYIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.min.js"
        integrity="sha512-VBbe8aA3uiK90EUKJnZ4iEs0lKXRhzaAXL8CIHWYReUwULzxkOSxlNixn41OLdX0R1KNP23/s76YPyeRhE6P+Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail],
                speed: 500,
            });
        })
    </script>
@endsection
@section('banner')
    <!-- Header Start -->
    <img loading="lazy" src="{{ asset('assets/img/KH_Beton/portofolio/3.jpg') }}" alt="Galeri KH Beton" class="banner">
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Galeri Kami</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active text-primary">Galeri</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    {{-- Gallery Start  --}}
    <div class="container my-5 px-4">
        <div class="row">
            <div class="col-12 mt-md-0 mt-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Menghadirkan Inovasi dalam Setiap Cetakan!</h1>
                    <p class="mb-0">
                        KH Beton bangga menjadi bagian dari banyak proyek sukses. Lihat sendiri kualitas dan keandalan
                        produk kami melalui galeri ini. Dapatkan inspirasi untuk proyek Anda berikutnya!
                    </p>
                </div>
            </div>
        </div>
        <div id="lightgallery" class="row g-3">
            @foreach ($galleries as $item)
                <a href="{{ asset('uploaded_files/gallery/' . $item->thumbnail) }}"
                    class="gallery-item col-md-4 rounded wow fadeInUp"
                    data-sub-html="<h4 class='text-white'>{{ $item->title }}</p>" data-wow-delay="0.1s">
                    <img loading="lazy" src="{{ asset('uploaded_files/gallery/' . $item->thumbnail) }}"
                        class="gallery-img w-100 rounded" />
                </a>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $galleries->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
    {{-- Gallery End  --}}

    @include('layouts_user.cta')
@endsection
