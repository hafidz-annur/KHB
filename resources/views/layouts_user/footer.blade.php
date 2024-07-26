<!-- Footer Start -->
<div class="container-fluid footer py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <img src="{{ asset('uploaded_files/logo/' . $profile->logo_white) }}" alt="{{ $profile->title }}"
                        class="w-75">
                    <p class="fw-bold my-4 lh-base">{{ $profile->tagline }}</p>
                    @foreach ($location as $item)
                        <div class="lh-base m-0 mb-3">
                            {!! $item->address !!}
                        </div>
                    @endforeach
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-white me-2"></i>

                        @if ($profile->facebook_account)
                            <a href="https://facebook.com/{{ $profile->facebook_account }}"
                                class="btn btn-light btn-square border rounded-circle nav-fill me-3" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                        @endif
                        @if ($profile->instagram_account)
                            <a href="https://instagram.com/{{ $profile->instagram_account }}"
                                class="btn btn-light btn-square border rounded-circle nav-fill me-3" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        @endif
                        @if ($profile->linkedin_account)
                            <a href="https://linkedin.com/{{ $profile->linkedin_account }}"
                                class="btn btn-light btn-square border rounded-circle nav-fill me-0" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if ($profile->x_account)
                            <a href="https://youtube.com/{{ $profile->x_account }}"
                                class="btn btn-light btn-square border rounded-circle nav-fill me-3" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Perusahaan</h4>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Gallery</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Portofolio</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Berita</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Tentang Kami</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Produk Kami</h4>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Decorative PAVING Block</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Panel Beton Precast</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> U-Ditch & Box Culvert</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Kansteen Kerb All Type</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Concrete Barrier</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Precast Concrete Pile</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Special Ready Mix</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Informasi Kontak</h4>
                    <a href=""><i class="fas fa-envelope me-2"></i> {{ $profile->email }}</a>
                    @foreach ($location as $item)
                        <a href=""><i class="fas fa-phone me-2"></i> {{ $item->phone }} </a>
                    @endforeach
                    <a href=""><i class="fas fa-phone me-2"></i> {{ $profile->wa_number_1 }} </a>
                    <a href=""><i class="fas fa-phone me-2"></i> {{ $profile->wa_number_2 }} </a>
                </div>
                Jumlah Pengunjung:
                <span class="badge bg-danger fw-bold px-3">
                    {{ $visitor['total'] }}
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-12 text-center mb-md-0">
                <span class="text-white">
                    <a href="#">
                        <i class="fas fa-copyright text-light me-2"></i>
                        KH Beton
                    </a>, All right reserved.
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
