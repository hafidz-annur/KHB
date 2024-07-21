@extends('layouts/contentNavbarLayout')

@section('title', 'Portofolio')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary">
            <h5 class="m-0 text-white">
                <i class="mdi mdi-tag-check me-2"></i>
                Portofolio
            </h5>
            <button class="btn btn-sm btn-light py-1 px-2" data-bs-toggle="modal" data-bs-target="#portofolioModal"
                onclick="resetForm()">
                <i class="mdi mdi-plus me-2"></i>
                Tambah
            </button>
        </div>
        <div class="card-body">
            <table class="table datatables">
                <thead>
                    <tr>
                        <th class="text-start">No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portofolios as $item)
                        <tr>
                            <td class="text-start">{{ $loop->iteration }}</td>
                            <td>
                                {{ $item->title }}
                            </td>
                            <td>
                                {!! Str::limit($item->description, 30) !!}
                            </td>
                            <td class="text-center">
                                <img loading="lazy" src="{{ asset('uploaded_files/portofolio/' . $item->thumbnail) }}"
                                    alt="{{ $item->alt }}" style="width: 100px; height:70px; object-fit:cover;"
                                    class="rounded shadow">
                            </td>
                            <td class="text-center">
                                @if ($item->is_active)
                                    <i class="mdi mdi-check-circle-outline text-success" data-bs-toggle="tooltip"
                                        data-bs-title="Aktif"></i>
                                @else
                                    <i class="mdi mdi-close-circle-outline text-danger" data-bs-toggle="tooltip"
                                        data-bs-title="Tidak Aktif"></i>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item {{ $item->is_active ? 'text-warning' : 'text-success' }}"
                                            href="javascript:void(0);"
                                            onclick="confirmation('edit', '{{ url('admin/portofolio/status') . '/' . $item->id }}')">
                                            <i class="mdi {{ $item->is_active ? 'mdi-close' : 'mdi-check' }} me-1"></i>
                                            {{ $item->is_active ? 'Tidak di-aktifkan' : 'Aktifkan' }}
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0);"
                                            onclick="editData('{{ url('admin/portofolio') . '/' . $item->id }}')">
                                            <i class="mdi mdi-pencil-outline me-1"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"
                                            onclick="confirmation('delete', '{{ url('admin/portofolio/') . '/' . $item->id }}')"><i
                                                class="mdi mdi-trash-can-outline me-1"></i> Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('content.portofolio.portofolio-add')
@endsection
