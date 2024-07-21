<!DOCTYPE html>
<html lang="en">

@include('layouts_user.header')

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('layouts_user.topbar')

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('layouts_user.navbar')

        @yield('banner')
    </div>
    <!-- Navbar & Hero End -->
    @yield('content')

    @include('layouts_user.footer')

    <!-- Back to Top -->
    <div class="dropdown">
        <button href="#" class="btn btn-lg-square back-to-top" type="button" data-bs-toggle="dropdown"
            style="background: #27D045"><i class="bi bi-whatsapp text-white"></i>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="https://wa.me/{{ $profile->wa_number_1 }}" target="_blank">
                    <i class="bi bi-phone me-1"></i> {{ $profile->wa_number_1 }}
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="https://wa.me/{{ $profile->wa_number_2 }}" target="_blank">
                    <i class="bi bi-phone me-1"></i> {{ $profile->wa_number_2 }}
                </a>
            </li>
        </ul>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('assets') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assets') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets') }}/js/user_main.js"></script>

    {{-- Splide Js  --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.iife.js" defer init></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Plih salah satu",
                allowClear: true
            });
        });
    </script>
    @yield('script')

</body>

</html>
