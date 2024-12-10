@extends('layouts.dashboard')
@section('title','Lihat Postingan')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

@endpush
@section('content')
<h1 class="h3 mb-3">
    <strong>Lihat Postingan {{ $post->title }}</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12 mt-2">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" readonly>
                                    </div>
                                    <div class="col-md-6 mt-2" >
                                        <label for="category_id" class="form-label">Kategori</label>
                                        <select name="category_id" id="category_id" class="form-control" disabled>
                                            <option value="">Pilih Kategori</option>
                                                <option value="{{ $post->category_id }}" {{ $post->category_id == $post->category_id ? 'selected' : '' }}>{{ $post->category->name }}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label for="user_id" class="form-label">Pembuat</label>
                                        <select name="user_id" id="user_id" class="form-control" disabled>
                                            <option value="{{ $user->id }}" {{ $user->id == $post->user_id ? 'selected' : '' }}>{{ $user->name ?? '' }}</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="tags" class="form-label">tags</label>
                                        <input type="text" class="form-control" id="tags" name="tags" value="{{ $post->tags }}" readonly>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="keywords" class="form-label">Keywords</label>
                                        <input type="text" class="form-control" id="keywords" name="keywords" value="{{ $post->keywords }}" readonly>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label for="status" class="form-label">Status Publish</label>
                                        <select name="status" id="status" class="form-control" disabled>
                                            <option selected>Pilih Status</option>
                                            <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Publish</option>
                                            <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="image" class="form-label">Gambar</label>
                                        <img src="{{ asset('storage/post/'.$post->image) }}" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <div class="col-md-12 mb-4">
                                        <label for="description" class="form-label">Deskripsi</label>
                                        <div id="editor">
                                            {!! $post->description !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5 mt-4">
                                    <div class="col-md-12 mb-4">
                                        <label for="extra_photo" class="form-label">Foto Tambahan</label>
                                        <div class="row">
                                            @php
                                                $extra_photos = explode(',', $post->extra_photo);
                                            @endphp
                                            @foreach ($extra_photos as $key => $extra_photo)
                                                <div class="col-md-4">
                                                    <img src="{{ asset('storage/post/extra/'. $extra_photo) }}" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12 mt-5">
                                        <a href="{{ route('dashboard.post.news.index') }}" class="btn btn-danger">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
            const toolbarOptions = [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],

                [{
                    'header': 1
                }, {
                    'header': 2
                }], // custom button values
                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }],
                [{
                    'script': 'sub'
                }, {
                    'script': 'super'
                }], // superscript/subscript
                [{
                    'indent': '-1'
                }, {
                    'indent': '+1'
                }], // outdent/indent
                [{
                    'direction': 'rtl'
                }], // text direction

                [{
                    'size': ['small', false, 'large', 'huge']
                }], // custom dropdown
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],

                [{
                    'color': []
                }, {
                    'background': []
                }],
                [{
                    'font': []
                }],
                [{
                    'align': []
                }],

                ['clean']
            ];

            var quill = new Quill('#editor', {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });
            quill.enable(false);
        });
    </script>


@endpush
@endsection



