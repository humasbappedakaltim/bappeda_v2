@extends('layouts.dashboard')
@section('title','Survei')
@section('content')
<h1 class="mb-3 h3">
    <strong>Survei</strong>
        <a href="{{ route('dashboard.survei.masyarakat') }}" class="btn btn-success float-end btn-sm btn-rounded">
            Export Survie
            <i class="align-middle" data-feather="file"></i>
        </a>
    </h1>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stripped" id="survei_table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Jenis Kelamin</th>
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
            $('#survei_table').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("dashboard.survei.data_table") }}',
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'name', name: 'name'},
                        { data: 'email', name: 'email'},
                        { data: 'phone_number', name: 'phone_number'},
                        { data: 'age', name: 'age'},
                        { data: 'sex', name: 'sex'},
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#survei_table').on('click', '.btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.survei.destroy", ":slug") }}';
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
                                            reloadTable('#survei_table');
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
