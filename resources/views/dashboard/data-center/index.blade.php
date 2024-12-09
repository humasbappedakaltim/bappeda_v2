@extends('layouts.dashboard')
@section('title','Data Center')
@section('content')
<h1 class="h3 mb-3">
    <strong>Data Center</strong>
        <a href="{{ route('dashboard.data.center.create') }}" class="btn btn-primary float-end btn-sm btn-rounded">
            Tambah
            <i class="align-middle" data-feather="plus"></i>
        </a>
    </h1>

<div class="row">
    <div class="col-xl-12 col-xxl-7">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <h2>Filter</h2>
                    <div class="col-md-4 mb-2">
                        <label class="mb-2" for="category_data_center_id">Kategori Data Center</label>
                        <select name="category_data_center_id" id="category_data_center_id" class="form-control">
                            <option selected value="">Pilih Kategori Data Center</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-stripped" id="data_center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Posisi</th>
                                <th scope="col">File</th>
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
            $('#data_center').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("dashboard.data.center.data_table") }}',
                        'data': function (d) {
                            d.category_data_center_id = $('#category_data_center_id').val();
                        }
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'name', name: 'name'},
                        { data: 'category', name: 'category'},
                        { data: 'order', name: 'order'},
                        { data: 'file', name: 'file'},
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#data_center').on('click', '.btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.data.center.destroy", ":slug") }}';
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
                                            reloadTable('#data_center');
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
                $('#data_center').DataTable().ajax.reload();
            });
        });
    </script>
@endpush
@endsection
