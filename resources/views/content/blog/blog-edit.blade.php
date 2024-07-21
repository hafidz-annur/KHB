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

<div class="modal modal-lg fade" id="blogModal" tabindex="-1" role="dialog" aria-labelledby="blogModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Artikel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="blogForm" method="POST" action="{{ url('admin/artikel') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <img loading="lazy" id="previewThumbnail" class="preview shadow"
                                    src="https://placehold.co/800x300" alt="Preview">

                                <div class="bg-white position-relative overflow-hidden">
                                    <input type="file" class="position-absolute z-0 top-0" id="thumbnail"
                                        name="thumbnail" placeholder="Thumbnail" accept="image/*"
                                        onchange="previewImage(this)" required>
                                    <label for="thumbnail" class="btn btn-sm btn-light shadow d-block py-2">Tambahkan
                                        Gambar</label>
                                </div>
                                <p id="infoThumbnail" class="text-center lh-1 mt-1">
                                    <small>
                                        Klik untuk mengganti gambar sebelumnya.
                                    </small>
                                </p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="alt" name="alt"
                                    placeholder="Alt" required>
                                <label for="alt">Alt</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <input type="hidden" id="blog_id">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Judul" required>
                                <label for="title">Judul <span class="text-danger">*</span></label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" style="height: 100px;"></textarea>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tags" name="tags"
                                    placeholder="Tag">
                                <label for="tags">Tag</label>
                                <small>Berilah tanda koma <strong> (,) </strong> untuk menambahkan lebih dari 1
                                    tag</small>
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

    function editData(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                $('#blogModal').modal('show');
                setTimeout(() => {
                    $('#blogForm').attr('action', '{{ url('admin/artikel') }}' + '/' + response
                        .id);
                    $('#blogForm').append('<input type="hidden" name="_method" value="PUT">');
                    $('#blog_id').val(response.id);
                    $('#title').val(response.title);
                    myEditor.setData(response.description);
                    $('#previewThumbnail').attr('src', '{{ asset('uploaded_files/blog/') }}' + '/' +
                        response.thumbnail)
                    $('#thumbnail').removeAttr('required')
                    $('#alt').val(response.alt);
                    $('#tags').val(response.tags);
                }, 1000);
            },
        });
    }
</script>
