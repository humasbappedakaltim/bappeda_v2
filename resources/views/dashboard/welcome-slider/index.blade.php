@extends('layouts.dashboard')
@section('title','Slider Welcome')
@section('content')
<h1 class="h3 mb-3">
    <strong>Slider Welcome</strong>
        <a href="{{ route('dashboard.sliders.create') }}" class="btn btn-primary float-end btn-sm btn-rounded">
            Tambah
            <i class="align-middle" data-feather="plus"></i>
        </a>
    </h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stripped" id="slider_table">
                        <thead>

                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal Expired</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ke</th>
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
            $('#slider_table').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("dashboard.sliders.data_table") }}',
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'title', name: 'title'},
                        { data: 'expired_date', name: 'expired_date'},
                        { data: 'active', name: 'active',
                            render: function (data) {
                                if (data == 1) {
                                    return '<span class="badge bg-success">Aktif</span>';
                                } else {
                                    return '<span class="badge bg-danger">Tidak Aktif</span>';
                                }
                            }
                        },
                        { data: 'orders', name: 'orders', orderable: true},
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#slider_table').on('click', '.btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.sliders.destroy", ":slug") }}';
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
                                            reloadTable('#slider_table');
                                        });
                                    } else {
                                        Swal.fire('Error', data.message, 'error');
                                    }
                                },
                            });
                        }
                    });
                });
        });
    </script>
@endpush
@endsection
