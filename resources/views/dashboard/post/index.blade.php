@extends('layouts.dashboard')
@section('title','Postingan')
@section('content')
<h1 class="h3 mb-3">
    <strong>Postingan</strong>
        <a href="{{ route('dashboard.post.news.create') }}" class="btn btn-primary float-end btn-sm btn-rounded">
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
                        <label class="mb-2" for="category">Kategori Postingan</label>
                        <select name="category" id="category" class="form-control">
                            <option selected value="">Pilih Kategori Postingan</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="mb-2" for="category">Status Postingan</label>
                        <select name="status" id="status" class="form-control">
                            <option selected value="">Pilih Status Postingan</option>
                            <option value="published">Dipublikasikan</option>
                            <option value="draft">Draft</option>
                            <option value="trashed">Di Hapus</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-stripped" id="news_post">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Pembuat</th>
                                <th scope="col">Tanggal</th>
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
            $('#news_post').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("dashboard.post.news.data_table") }}',
                        'data': function (d) {
                            d.category_id = $('#category').val();
                            d.status = $('#status').val();
                        },
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'title', name: 'title'},
                        { data: 'category', name: 'category'},
                        { data: 'user', name: 'user'},
                        { data: 'date', name: 'date'},
                        { data: 'status', name: 'status',
                            render: function (data) {
                                if (data == 'published') {
                                    return '<span class="badge bg-success">Dipublikasikan</span>';
                                } else if (data == 'draft') {
                                    return '<span class="badge bg-warning">Draft</span>';
                                } else {
                                    return '<span class="badge bg-danger">Dihapus</span>';
                                }
                            }
                        },
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#news_post').on('click', '.btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.post.news.destroy", ":slug") }}';
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
                                            reloadTable('#news_post');
                                        });
                                    } else {
                                        Swal.fire('Error', data.message, 'error');
                                    }
                                },
                            });
                        }
                    });
                });
                $('#category').on('change', function () {
                    $('#news_post').DataTable().ajax.reload();
                });
                $('#status').on('change', function () {
                    $('#news_post').DataTable().ajax.reload();
                });
        });
    </script>
@endpush
@endsection
