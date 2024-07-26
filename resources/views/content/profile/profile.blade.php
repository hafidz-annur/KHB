@extends('layouts/contentNavbarLayout')

@section('title', 'Profil')

@section('content')
    <style>
        .preview {
            width: 100%;
            height: 150px;
            object-fit: contain;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary">
            <h5 class="m-0 text-white">
                <i class="mdi mdi-account me-2"></i>
                Profil
            </h5>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <form action="{{ url('admin/profil/' . $profile->id) }}" method="POST" enctype="multipart/form-data"
                        class="mt-3">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <img id="prevLogoColor" class="preview shadow"
                                        src="{{ asset('uploaded_files/logo/' . $profile->logo_color) }}" alt="Preview">

                                    <div class="bg-white position-relative overflow-hidden">
                                        <input type="file" class="position-absolute z-0 top-0" id="logo_color"
                                            name="logo_color" placeholder="Logo" accept="image/*"
                                            onchange="previewLogoColor(this)">
                                        <label for="logo_color" class="btn btn-sm btn-light shadow d-block py-2">
                                            Logo Warna</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <img id="prevLogoWhite" class="preview shadow bg-dark"
                                        src="{{ asset('uploaded_files/logo/' . $profile->logo_white) }}" alt="Preview">

                                    <div class="bg-white position-relative overflow-hidden">
                                        <input type="file" class="position-absolute z-0 top-0" id="logo_white"
                                            name="logo_white" placeholder="Logo" accept="image/*"
                                            onchange="previewLogoWhite(this)">
                                        <label for="logo_white" class="btn btn-sm btn-light shadow d-block py-2">
                                            Logo Putih</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Title" value="{{ $profile->title }}" required>
                                    <label for="title">Nama Website</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tagline" name="tagline"
                                        placeholder="Tagline" value="{{ $profile->tagline }}" required>
                                    <label for="tagline">Tagline</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" value="{{ $profile->email }}" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </div>

                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="wa_number_1" name="wa_number_1"
                                        placeholder="Nomor WA 1" value="{{ $profile->wa_number_1 }}">
                                    <label for="wa_number_1">Nomor WA 1</label>
                                    <small>* Format: +628123123xxxx</small>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="wa_number_2" name="wa_number_2"
                                        placeholder="Nomor WA 2" value="{{ $profile->wa_number_2 }}">
                                    <label for="wa_number_2">Nomor WA 2</label>
                                    <small>* Format: +628123123xxxx</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="instagram_account"
                                        name="instagram_account" placeholder="Akun Instagram"
                                        value="{{ $profile->instagram_account }}">
                                    <label for="instagram_account">Akun Instagram</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="x_account" name="x_account"
                                        placeholder="Akun X" value="{{ $profile->x_account }}">
                                    <label for="x_account">Akun Youtube</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="facebook_account"
                                        name="facebook_account" placeholder="Akun Facebook"
                                        value="{{ $profile->facebook_account }}">
                                    <label for="facebook_account">Akun Facebook</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="linkedin_account"
                                        name="linkedin_account" placeholder="Akun Linkedin"
                                        value="{{ $profile->linkedin_account }}">
                                    <label for="linkedin_account">Akun Linkedin</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary"><i
                                    class="mdi mdi-content-save me-2"></i>Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 overflow-auto" style="max-height: 670px;">
                    @include('content.profile.location')
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewLogoColor(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#prevLogoColor').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        function previewLogoWhite(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#prevLogoWhite').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
    </script>
@endsection
