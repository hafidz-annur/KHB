<div class="d-flex justify-content-between align-items-center mt-3">
    <h6 class="m-0">Alamat</h6>
    <button type="button" class="btn btn-secondary btn-sm" data-bs-target="#locationModal"
        data-bs-toggle="modal">Tambah</button>
</div>
<hr>
<ul class="list-group">
    @foreach ($location as $item)
        <li class="list-group-item">
            <small>
                <strong> Nomor Kantor:</strong> {{ $item->phone }} <br>
                <strong>Alamat:</strong> {!! $item->address !!}
            </small>
            {!! $item->google_maps_link !!}
            <button class="btn btn-sm btn-block btn-outline-danger"
                onclick="confirmation('delete', '{{ url('admin/profil/lokasi') . '/' . $item->id }}')">Hapus
                Alamat</button>
        </li>
    @endforeach
</ul>

<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="locationModalLabel">Tambah Alamat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/profil/lokasi') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" id="address" name="address" placeholder="Alamat"></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                required>
                            <label for="phone">Nomor Telepon</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea type="url" class="form-control" id="google_maps_link" name="google_maps_link"
                                placeholder="Embed Google Maps"></textarea>
                        </div>
                        <small>Contoh: https://www.google.com/maps/embed?pb=..</small>
                    </div>

                    <div class="px-0 d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
