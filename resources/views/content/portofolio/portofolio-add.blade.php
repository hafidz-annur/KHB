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

<div class="modal modal-lg fade" id="portofolioModal" tabindex="-1" role="dialog" aria-labelledby="portofolioModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="headerModal">Tambahkan Portofolio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="portofolioForm" method="POST" action="{{ url('admin/portofolio') }}"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <img loading="lazy" id="previewThumbnail" class="preview shadow"
                                    src="https://placehold.co/600x450" alt="Preview">

                                <div class="bg-white position-relative overflow-hidden">
                                    <input type="file" class="position-absolute z-0 top-0" id="thumbnail"
                                        name="thumbnail" placeholder="Thumbnail" accept="image/*"
                                        onchange="previewImage(this)" required>
                                    <label for="thumbnail" class="btn btn-sm btn-light shadow d-block py-2">Tambahkan
                                        Gambar <span class="text-danger">*</span></label>
                                </div>
                                <p id="infoThumbnail" class="text-center lh-1 mt-1" hidden>
                                    <small>
                                        Klik untuk mengganti gambar sebelumnya.
                                    </small>
                                </p>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="alt" name="alt"
                                    placeholder="Alt" required>
                                <label for="alt">Alt <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <input type="hidden" id="portofolio_id">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Judul" required>
                                <label for="title">Judul <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" style="height: 100px;"></textarea>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="Lokasi">
                                <label for="location">Lokasi</label>
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
        $('#headerModal').html('Tambahkan Portofolio')
        $('#infoThumbnail').attr('hidden', true)
        $('#portofolioForm').find('input, input, select').each(function() {
            $(this).val('');
        });
        $('#portofolioForm').find('textarea').each(function() {
            myEditor.setData('')
        });
        $('#portofolioForm').append('@csrf');
        $('#previewThumbnail').attr('src', 'https://placehold.co/600x450')
        $('#thumbnail').attr('required', true)
        $('#portofolioForm').attr('action', '{{ url('admin/portofolio/') }}');
        $('#method').remove()
    }

    function editData(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                $('#portofolioModal').modal('show');
                setTimeout(() => {
                    $('#headerModal').html('Edit Portofolio')
                    $('#infoThumbnail').removeAttr('hidden')
                    $('#portofolioForm').append('@csrf');
                    $('#portofolioForm').attr('action', '{{ url('admin/portofolio') }}' + '/' +
                        response
                        .id);
                    $('#portofolioForm').append(
                        '<input type="hidden" name="_method" value="PUT" id="method">');
                    $('#portofolio_id').val(response.id);
                    $('#title').val(response.title);
                    $('#previewThumbnail').attr('src', '{{ asset('uploaded_files/portofolio/') }}' +
                        '/' + response.thumbnail)
                    $('#thumbnail').removeAttr('required')
                    $('#alt').val(response.alt);
                    $('#location').val(response.location);
                    myEditor.setData(response.description);
                }, 1000);
            },
        });
    }
</script>
