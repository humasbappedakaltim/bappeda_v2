@extends('layouts.dashboard')
@section('title','Data Aplikasi BAPPEDA')
@section('content')
<h1 class="h3 mb-3">
    <strong>Data Aplikasi BAPPEDA</strong>
        <a href="{{ route('dashboard.app-bappeda.create') }}" class="btn btn-primary float-end btn-sm btn-rounded">
            Tambah
            <i class="align-middle" data-feather="plus"></i>
        </a>
    </h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <h2>Filter</h2>
                    {{-- <div class="col-md-4 mb-2">
                        <label class="mb-2" for="category_data_center_id">Kategori Data Center</label>
                        <select name="category_data_center_id" id="category_data_center_id" class="form-control">
                            <option selected value="">Pilih Kategori Data Center</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                </div>
                <div class="table-responsive">
                    <table class="table table-stripped" id="app_bappeda">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Link</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Order</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#app_bappeda').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("dashboard.app-bappeda.data_table") }}',
                        'data': function (d) {
                            d.category_data_center_id = $('#category_data_center_id').val();
                        }
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'name', name: 'name'},
                        { data: 'link', name: 'link'},
                        { data: 'foto', name: 'foto'},
                        { data: 'orders', name: 'orders'},
                        { data: 'status', name: 'status',
                            render: function (data, type, row) {
                                if (data == 1) {
                                    return '<span class="badge bg-success">Aktif</span>';
                                } else {
                                    return '<span class="badge bg-danger">Tidak Aktif</span>';
                                }
                            }
                        },
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#app_bappeda').on('click', '.btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.app-bappeda.destroy", ":slug") }}';
                    url = url.replace(':slug', slug);
                    Swal.fire({
                        title: 'Anda yakin?',
                        text: 'Data yang sudah dihapus tidak dapat dikembalikan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Hapus',
                        cancelButtonText: 'Batal',
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        dangerMode: true,
                        reverseButtons: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                            $.ajax({
                                url: url,
                                type: 'DELETE',
                                success: function (data) {
                                    if (data.status === 'success') {
                                        Swal.fire('Berhasil', data.message, 'success').then(() => {
                                            reloadTable('#app_bappeda');
                                        });
                                    } else {
                                        Swal.fire('Error', data.message, 'error');
                                    }
                                },
                            });
                        }
                    });
                });
            $('#category_data_center_id').on('change', function () {
                $('#app_bappeda').DataTable().ajax.reload();
            });
        });
    </script>
@endpush
@endsection
