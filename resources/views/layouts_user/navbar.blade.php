<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <img src="{{ asset('uploaded_files/logo/' . $profile->logo_color) }}" alt="{{ $profile->title }}">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
            <a href="/produk"
                class="nav-item nav-link {{ request()->is('produk') || request()->is('produk/*') ? 'active' : '' }}">Produk</a>
            <a href="/portofolio"
                class="nav-item nav-link {{ request()->is('portofolio') ? 'active' : '' }}">Portofolio</a>
            <a href="/galeri" class="nav-item nav-link {{ request()->is('galeri') ? 'active' : '' }}">Galeri</a>
            <a href="/berita"
                class="nav-item nav-link {{ request()->is('berita') || request()->is('berita/*') ? 'active' : '' }}">Berita</a>
            <a href="/tentang-kami"
                class="nav-item nav-link {{ request()->is('tentang-kami') ? 'active' : '' }}">Tentang Kami</a>
        </div>
        <a href="/kontak-kami"
            class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Kontak
            Kami</a>
    </div>
</nav>
