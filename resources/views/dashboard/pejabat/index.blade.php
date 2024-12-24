@extends('layouts.dashboard')
@section('title','Data Pegawai')
@section('content')
<h1 class="h3 mb-3">
    <strong>Data Pegawai</strong>
        <a href="{{ route('dashboard.pejabat.create') }}" class="btn btn-primary float-end btn-sm btn-rounded">
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
                    <div class="col-md-4 mb-2">
                        <label class="mb-2" for="bidang_id">Bidang</label>
                        <select name="bidang_id" id="bidang_id" class="form-control">
                            <option selected value="">Pilih Bidang</option>
                            @foreach ($bidangs as $bidang)
                                <option value="{{ $bidang->id }}">{{ $bidang->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="mb-2" for="sub_bidang_id">Sub Bidang</label>
                        <select name="sub_bidang_id" id="sub_bidang_id" class="form-control">
                            <option selected value="">Pilih Sub Bidang</option>
                            @foreach ($subBidangs as $sub)
                                <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-stripped" id="pejabat_table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Bidang</th>
                                <th scope="col">Sub Bidang</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Status Aktif</th>
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
            $('#pejabat_table').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("dashboard.pejabat.data_table") }}',
                        'data': function (d) {
                            d.bidang_id = $('#bidang_id').val();
                            d.sub_bidang_id = $('#sub_bidang_id').val();
                        }
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'name', name: 'name'},
                        { data: 'bidang', name: 'bidang'},
                        { data: 'sub_bidang', name: 'sub_bidang'},
                        { data: 'jabatan', name: 'jabatan'},
                        { data: 'foto', name: 'foto'},
                        {
                            data: 'status_aktif',
                            name: 'status_aktif',
                            render: function(data) {
                                if(data == 1){
                                    return '<span class="badge bg-success">Aktif</span>';
                                }else{
                                    return '<span class="badge bg-danger">Tidak Aktif</span>';
                                }
                            }
                        },
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#pejabat_table').on('click', '.btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.pejabat.destroy", ":slug") }}';
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
                                            reloadTable('#pejabat_table');
                                        });
                                    } else {
                                        Swal.fire('Error', data.message, 'error');
                                    }
                                },
                            });
                        }
                    });
                });
            $('#bidang_id').on('change', function () {
                $('#pejabat_table').DataTable().ajax.reload();
            });
            $('#sub_bidang_id').on('change', function () {
                $('#pejabat_table').DataTable().ajax.reload();
            });
        });
    </script>
@endpush
@endsection
