<!-- Modal -->
<style>
    .preview {
        width: 100%;
        height: 150px;
        object-fit: cover;
        margin-bottom: 10px;
        border-radius: 5px;
    }
</style>

<div class="modal modal-lg fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="headerModal">Tambahkan Kategori Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="categoryForm" method="POST" action="{{ url('admin/kategori/produk') }}"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <img loading="lazy" id="previewThumbnail" class="preview shadow"
                                    src="https://placehold.co/300x250" alt="Preview">

                                <div class="bg-white position-relative overflow-hidden">
                                    <input type="file" class="position-absolute z-0 top-0" id="thumbnail"
                                        name="thumbnail" placeholder="Thumbnail" accept="image/*"
                                        onchange="previewImage(this)" required>
                                    <label for="thumbnail" class="btn btn-sm btn-light shadow d-block py-2">Tambahkan
                                        Gambar</label>
                                </div>
                                <p id="infoThumbnail" class="text-center lh-1 mt-1" hidden>
                                    <small>
                                        Klik untuk mengganti gambar sebelumnya.
                                    </small>
                                </p>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="alt" name="alt"
                                    placeholder="ALT" required>
                                <label for="alt">Alt <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <input type="hidden" id="category_id">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Judul" required>
                                <label for="name">Nama Kategori <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" style="height: 100px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary"><i
                                class="mdi mdi-content-save me-2"></i>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#previewThumbnail').attr('src', e.target.result);
                console.log(e.target);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    function resetForm() {
        $('#headerModal').html('Tambahkan Kategori Produk')
        $('#infoThumbnail').attr('hidden', true)
        $('#categoryForm').find('input, input, select').each(function() {
            $(this).val('');
        });
        $('#categoryForm').find('textarea').each(function() {
            myEditor.setData('')
        });
        $('#categoryForm').append('@csrf');
        $('#previewThumbnail').attr('src', 'https://placehold.co/300x250')
        $('#thumbnail').attr('required', true)
        $('#categoryForm').attr('action', '{{ url('admin/kategori/produk') }}');
        $('#method').remove()
    }

    function editData(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                $('#categoryModal').modal('show');
                console.log(response.alt);
                setTimeout(() => {
                    $('#headerModal').html('Edit Kategori Produk')
                    $('#infoThumbnail').removeAttr('hidden')
                    $('#categoryForm').append('@csrf');
                    $('#categoryForm').attr('action', '{{ url('admin/kategori/produk') }}' + '/' +
                        response
                        .id);
                    $('#categoryForm').append('<input type="hidden" name="_method" value="PUT">');
                    $('#category_id').val(response.id);
                    $('#name').val(response.name);
                    $('#alt').val(response.alt);
                    $('#previewThumbnail').attr('src',
                        '{{ asset('uploaded_files/category/') }}' + '/' + response.thumbnail);
                    $('#thumbnail').removeAttr('required');
                    myEditor.setData(response.description);
                }, 1000);
            },
        });
    }
</script>
