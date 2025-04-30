@extends('layouts.dashboard')
@section('title','Survei RPJMD')
@section('content')
<h1 class="h3 mb-3">
    <strong>Survei RPJMD</strong>
        <a href="{{ route('dashboard.survei-rpjmd.download') }}" class="btn btn-primary float-end btn-sm btn-rounded" download="">
            Download
            <i class="align-middle" data-feather="download"></i>
        </a>
    </h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stripped" id="survei_rpjmd_table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nomor Responden</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Usia</th>
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
            $('#survei_rpjmd_table').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("dashboard.survei-rpjmd.data_table") }}',
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'id', name: 'id'},
                        { data: 'phone_number', name: 'phone_number'},
                        { data: 'age', name: 'age'},
                        { data: 'sex', name: 'sex'},
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#survei_rpjmd_table').on('click', '.btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.survei-rpjmd.destroy", ":slug") }}';
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
                                            reloadTable('#survei_rpjmd_table');
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
