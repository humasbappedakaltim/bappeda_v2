@extends('layouts.dashboard')
@section('title','Pio')
@section('content')
<h1 class="h3 mb-3">
    <strong>List Permohonan Informasi Online</strong>
        {{-- <a href="{{ route('dashboard.maps.create') }}" class="btn btn-primary float-end btn-sm btn-rounded">
            Tambah
            <i class="align-middle" data-feather="plus"></i>
        </a> --}}
    </h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stripped text-center" id="pio_table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Jenis</th>
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
            $('#pio_table').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("dashboard.pio.data_table") }}',
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'name', name: 'name'},
                        { data: 'nik', name: 'nik'},
                        { data: 'email', name: 'email'},
                        { data: 'telp', name: 'telp'},
                        { data: 'jenis', name: 'jenis'},
                        { data: 'status', name: 'status',
                            render: function (data) {
                                if (data == '1') {
                                    return '<span class="badge bg-success"><i class="bx bxs-check-circle"></i> Sudah di Proses</span>';
                                } else {
                                    return '<span class="badge bg-danger"> <i class="bx bxs-x-circle"></i> Belum di Proses</span>';
                                }
                            }
                        },
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#pio_table').on('click', '.btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.pio.destroy", ":slug") }}';
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
                                            reloadTable('#pio_table');
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
