<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/materialdesignicons.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.css')) }}" />
<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/5.0.1/css/fixedColumns.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.0/ckeditor5.css">
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

<!-- Tambahkan Intro.js melalui CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/7.2.0/introjs.css"
    integrity="sha512-4OzqLjfh1aJa7M33b5+h0CSx0Q3i9Qaxlrr1T/Z+Vz+9zs5A7GM3T3MFKXoreghi3iDOSbkPMXiMBhFO7UBW/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
    div.dt-container .dt-paging .dt-paging-button {
        padding: 0 !important;
    }

    .page-item:not(:first-child) .page-link {
        margin: 0 !important;

    }

    div.dt-container .dt-paging .dt-paging-button:hover {
        background: transparent !important;
        border-radius: 100%;
    }

    /* This selector targets the editable element (excluding comments). */
    .ck-editor__editable_inline:not(.ck-comment__input *) {
        min-height: 200px;
        overflow-y: auto;
    }

    .swal2-container {
        z-index: 9999 !important;
    }

    /* custom sweetalert2 */
    .custom-radius-popup {
        border-radius: 20px;

        /* Sesuaikan radius sesuai kebutuhan */
    }

    .introjs-tooltip {
        background: rgba(255, 255, 255, 0.919) !important;
        border-radius: 10px !important;
        color: black !important;
    }

    .introjs-button {
        border-radius: 20px !important;
        padding: 5px 20px !important;
    }

    .introjs-overlay {
        background: black !important;
        opacity: .6 !important;
    }
</style>

<!-- Vendor Styles -->
@yield('vendor-style')


<!-- Page Styles -->
@yield('page-style')
