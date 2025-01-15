@extends('layouts.dashboard')

@section('title', 'Edit Postingan')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
@endpush

@section('content')
<h1 class="h3 mb-3"><strong>Edit Postingan</strong></h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('layouts.flashmessage')
            <div class="card-body">
                <form action="{{ route('dashboard.post.news.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Category and Creator -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select name="category_id" id="category_id" class="form-control select2">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categorys as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="user_id" class="form-label">Pembuat</label>
                            <select name="user_id" id="user_id" class="form-control select2">
                                <option value="">Pilih Pembuat</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $post->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Tags and Keywords -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" class="form-control @error('tags') is-invalid @enderror" id="tags" name="tags" value="{{ old('tags', $post->tags) }}">
                            @error('tags')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="keywords" class="form-label">Keywords</label>
                            <input type="text" class="form-control @error('keywords') is-invalid @enderror" id="keywords" name="keywords" value="{{ old('keywords', $post->keywords) }}">
                            @error('keywords')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status Publish</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ $post->status == '1' ? 'selected' : '' }}>Publish</option>
                            <option value="0" {{ $post->status == '0' ? 'selected' : '' }}>Draf</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="mt-3 text-center">
                            <img src="{{ $post->image ? asset('storage/post/' . $post->image) : '' }}" id="output" class="img-preview img-fluid" style="border-radius: 10px;">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <div id="editor">{!! $post->description !!}</div>
                        <textarea name="description" id="content-editor" style="display: none;">{!! $post->description !!}</textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-5">
                        <a href="{{ route('dashboard.post.news.index') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </div>
                </form>
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

                const toolbarOptions = [
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    [{ 'header': 1 }, { 'header': 2 }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'script': 'sub' }, { 'script': 'super' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'direction': 'rtl' }],
                    [{ 'size': ['small', false, 'large', 'huge'] }],
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'font': [] }],
                    [{ 'align': [] }],
                    ['link', 'image', 'video'],
                    ['clean']
                ];

                const quill = new Quill('#editor', {
                    modules: {
                        toolbar: {
                            container: toolbarOptions,
                            handlers: {
                                image: function () {
                                    selectLocalImage();
                                }
                            }
                        },
                        resize: {
                            locale: {},
                        },
                    },
                    theme: 'snow'
                });

                quill.root.innerHTML = '{!! $post->description !!}';

                quill.on('text-change', function () {
                    $('#content-editor').text($('.ql-editor').html());
                });

                function selectLocalImage() {
                    const input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.click();

                    input.onchange = async () => {
                        const file = input.files[0];
                        if (file) {
                            const formData = new FormData();
                            formData.append('gambar_upload', file); // Adjust the key to match your backend.

                            try {
                                const response = await fetch('{{ route('dashboard.post.upload.image') }}', {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    },
                                });

                                if (!response.ok) {
                                    throw new Error(`HTTP error! status: ${response.status}`);
                                }

                                const data = await response.json();
                                if (data.status === 'success') {
                                    const range = quill.getSelection();
                                    quill.insertEmbed(range.index, 'image', data.url);

                                    // Add inline styling for the uploaded image
                                    const imgElement = document.querySelector(`img[src="${data.url}"]`);
                                    if (imgElement) {
                                        imgElement.style.width = '10%';
                                    }

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: data.message,
                                        showConfirmButton: false,
                                        timer: 1500,
                                    });
                                } else {
                                    alert(data.message || 'Gagal mengunggah gambar');
                                }
                            } catch (error) {
                                console.error('Error uploading image:', error);
                                alert('Terjadi kesalahan saat mengunggah gambar.');
                            }
                        }
                    };
                }
            });
    </script>
@endpush
@endsection
