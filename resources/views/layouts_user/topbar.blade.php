<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center" style="height: 45px;">
        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="#" class="text-light me-4"><i
                        class="fas fa-phone-alt text-danger me-2"></i>{{ $profile->office_number }}</a>
                <a href="#" class="text-light me-0"><i
                        class="fas fa-envelope text-danger me-2"></i>{{ $profile->email }}</a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-flex align-items-center justify-content-end">
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
</div>
<!-- Topbar End -->
