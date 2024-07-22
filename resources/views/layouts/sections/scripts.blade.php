<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script>

{{-- Start Datatables  --}}
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/dataTables.fixedColumns.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/fixedColumns.dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
{{-- End Datatables  --}}

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/7.2.0/intro.js"
    integrity="sha512-f26fxKZJiF0AjutUaQHNJ5KnXSisqyUQ3oyfaoen2apB1wLa5ccW3lmtaRe2jdP5kh4LF2gAHP9xQbx7wYhU5w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@stack('script-page')
<script>
    // Start DataTable 
    let table = new DataTable('.datatables', {
        lengthChange: false,
        responsive: true,
        fixedColumns: {
            start: 2,
            end: 1
        },
        scrollCollapse: true,
    });
    // End DataTable 

    // Start CKEditor 
    var myEditor;

    document.querySelectorAll('textarea').forEach(function(element) {
        ClassicEditor
            .create(element, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                    'blockQuote'
                ],
            })
            .then(editor => {
                console.log('Editor was initialized', editor);
                myEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    })
    // End CKEditor

    // Start Sweetalert 
    function confirmation(type, url) {
        // type = ['edit', 'delete']

        Swal.fire({
            icon: 'info',
            html: 'Apakah anda yakin ' + (type == 'delete' ? 'menghapus' : 'memperbaharui') + ' data ini?',
            showDenyButton: false,
            confirmButtonText: "Iya",
            cancelButtonText: 'Batal',
            width: '350px',
            customClass: {
                popup: 'custom-radius-popup shadow',
                confirmButton: 'btn btn-sm btn-outline-primary mx-1', // Kelas khusus untuk tombol Confirm
                cancelButton: 'btn btn-sm btn-danger mx-1' // Kelas khusus untuk tombol Cancel
            },
            buttonsStyling: false
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: type == 'delete' ? 'DELETE' : 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        notification('success', 'Data berhasil' + (type == 'delete' ? ' dihapus.' :
                            ' diperbaharui'))
                        setTimeout(() => {
                            location.reload();
                        }, 3000);
                    }
                });
            }
        });
    }

    function notification(status, message) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: status,
            title: message
        })
    }
    // End Sweetalert
</script>

{{-- Notification by Session  --}}
@if (session('success') || session('error'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: '{{ session('success') ? 'success' : 'error' }}',
            title: '{{ session('success') ? session('success') : session('error') }}'
        })
    </script>
@endif

@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('assets/js/main.js')) }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
