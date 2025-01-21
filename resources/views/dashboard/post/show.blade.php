@extends('layouts.dashboard')

@section('title', 'Detail Postingan')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
@endpush

@section('content')
<h1 class="h3 mb-3"><strong>Detail Postingan</strong></h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('layouts.flashmessage')
            <div class="card-body">
                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" value="{{ $post->title }}" readonly>
                </div>

                <!-- Category and Creator -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Kategori</label>
                        <input type="text" class="form-control" value="{{ $post->category->name }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Pembuat</label>
                        <input type="text" class="form-control" value="{{ $post->user->name ?? 'Admin' }}" readonly>
                    </div>
                </div>

                <!-- Tags and Keywords -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tags</label>
                        <input type="text" class="form-control" value="{{ $post->tags }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Keywords</label>
                        <input type="text" class="form-control" value="{{ $post->keywords }}" readonly>
                    </div>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label">Status Publish</label>
                    <input type="text" class="form-control" value="{{ $post->status == '1' ? 'Publish' : 'Draf' }}" readonly>
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <div class="mt-3 text-center">
                        <img src="{{ $post->image ? asset('storage/post/' . $post->image) : '' }}" id="output" class="img-preview img-fluid" style="border-radius: 10px;">
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <div>{!! $post->description !!}</div>
                </div>

                <!-- Back Button -->
                <div class="mt-5">
                    <a href="{{ route('dashboard.post.news.index') }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/quill/1.3.7/quill.min.js"></script>
    <script defer src="https://unpkg.com/quill-resize-image@1.0.5/dist/quill-resize-image.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.select2').select2();
            Quill.register("modules/resize", window.QuillResizeImage);

            const quill = new Quill('#editor', {
                modules: {
                    toolbar: false,
                    resize: {
                        locale: {},
                    },
                },
                theme: 'snow',
                readOnly: true
            });

            quill.root.innerHTML = '{!! $post->description !!}';
        });
    </script>
@endpush
@endsection

