@extends('layouts_user.main')
@section('title', $blog->title . ' | KH BETON')
@section('meta')
    <meta name="description" content="{!! Str::limit($blog->description, 100) !!}" />
    <meta name="keywords"
        content="kansteen solo, kansteen boyolali, pagar panel solo, pagar panel boyolali, saluran drainase boyolali, u-ditch boyolali, u-ditch solo, box culvert boyolali, box culvert solo, ready mix, wet mix, dry mix, ready mix boyolali, precast, precast boyolali, precast solo, precast jawa tengah, beton jawa tengah, paving jawa tengah, paving boyolali, paving solo, beton boyolali, u-ditch, box culvert, paving, barrier, boyolali,pagar panel, solo, surakarta, industri, manufaktur, khbeton, high, performance, concrete, upgrade, your, profit, with, quality, precast, wetcast, drycast, mutu, k-350, k-700, durability" />
    <meta name="author" content="KH Beton" />
@endsection
@section('style')
    <style>
        div p {
            /* text-align: justify; */
        }

        .news-detail {
            height: 10vh;
        }

        @media (max-width: 600) {
            .news-detail {
                height: 1vh !important;
            }
        }
    </style>
@endsection

@section('banner')
    <!-- Header Start -->
    <div class="container-fluid news-detail">
    </div>
    <!-- Header End -->

    {{-- Product Start  --}}
    <div class="container py-5">
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-md-8">
                <div class="section-title mb-5 text-start">
                    <h1 class="display-6 text-muted">
                        {{ $blog->title }}
                    </h1>
                    <div class="row align-items-center mt-3">
                        <div class="col-md-4">
                            <div class="d-flex gap-1">
                                <small class="badge bg-primary mb-0">
                                    <i class="fa fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($blog->updated_at)->locale('id')->translatedFormat('l, d F Y') }}
                                </small>
                                <small class="badge bg-dark mb-0">
                                    <i class="fas fa-eye me-1"></i>
                                    {{ $blog->viewed }}x Dilihat
                                </small>
                            </div>
                        </div>
                        <div class="col-md-8 text-md-end text-start">
                            <div class="shareon">
                                <a class="facebook"></a>
                                <a class="linkedin"></a>
                                <a class="twitter"></a>
                                <a class="whatsapp"></a>
                                <a class="copy-url"></a>
                            </div>
                        </div>
                    </div>
                    <small>
                    </small>
                    <img loading="lazy" src="{{ asset('uploaded_files/blog/' . $blog->thumbnail) }}"
                        alt="{{ $blog->alt }}" class="w-100 rounded my-4">
                    <p class="mb-0 lh-lg">
                        {!! $blog->description !!}
                    </p>

                    @if (count($blog->tag) > 0)
                        <div class="mt-4 mb-3">
                            <h4 class="text-muted">Tag</h4>
                            @foreach ($blog->tag as $item)
                                <div class="badge bg-primary px-2">
                                    {{ $item->tag }}
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="text-muted">Berita Lainnya</h4>
                @foreach ($others as $item)
                    <a href="{{ url('berita/' . $item->slug) }}">
                        <div class="blog-item rounded border-bottom border-5 border-success shadow mb-3">
                            <div class="blog-img rounded">
                                <img loading="lazy" src="{{ asset('uploaded_files/blog/' . $item->thumbnail) }}"
                                    class="img-fluid w-100 rounded" alt="{{ $item->alt }}">
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
                                <p class="h6">
                                    {{ $item->title }}
                                </p>
                                <small class="my-4">
                                    {!! Str::limit($item->description, 100) !!}
                                </small>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Product End  --}}

    @include('layouts_user.cta')
@endsection
