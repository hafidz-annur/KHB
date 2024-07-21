@extends('layouts_user.main')

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

    <div class="container my-5">
        <div class="row">
            <div class="col-md-7 order-md-0 order-1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.423238257731!2d110.56237567476306!3d-7.528730192484346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6f93c89173f9%3A0x9af447f6fd046667!2sKH%20Beton%20Office%20(Precast%20Concrete%20%26%20Ready%20Mix)!5e0!3m2!1sen!2sid!4v1720705689613!5m2!1sen!2sid"
                    width="100%" height="530" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded shadow"></iframe>

                <div class="card border-0 shadow mt-3 bg-dark text-white">
                    <div class="card-body">
                        <div class="row row-cols-md-3 row-cols-1">
                            <div class="col text-md-start text-center">
                                <i class="fas fa-envelope me-2"></i> {{ $profile->email }}
                            </div>
                            <div class="col text-center">
                                <i class="fas fa-phone me-2"></i>
                                {{ $profile->wa_number_1 }}
                            </div>
                            <div class="col text-md-end text-center">
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
