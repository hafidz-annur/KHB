<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
    <div class="{{ !empty($containerNav) ? $containerNav : 'container-fluid' }}">
        <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
            <div class="text-body mb-2 mb-md-0">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
            <div class="d-none d-lg-inline-block">
                <select name="menus" id="footer_menus" class="form-select" onchange="getMenu(this)">
                    <option selected>Pilih Menu</option>
                    <option value="dashboard">Dashboard</option>
                    <option value="banner">Banner</option>
                    <option value="produk">Produk</option>
                    <option value="artikel">Artikel</option>
                    <option value="portofolio">Portofolio</option>
                    <option value="galeri">Galeri</option>
                    <option value="klien">Klien</option>
                    <option value="sertifikasi">Sertifikasi</option>
                    <option value="kontak">Kontak</option>
                    <option value="profil">Profil</option>
                </select>
            </div>
        </div>
    </div>
</footer>

<script>
    function getMenu(input) {
        location.href = "{{ url('/admin') }}/" + input.value;
    }
</script>
<!--/ Footer-->
