@extends('layouts.dashboard')
@section('title','Edit Postingan')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

@endpush
@section('content')
<h1 class="h3 mb-3">
    <strong>Edit Postingan</strong>
</h1>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('layouts.flashmessage')
                        <div class="card-body">
                            <form action="{{ route('dashboard.post.news.update',$post->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-md-12 mt-2">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title',$post->title) }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-2">
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
                                    <div class="col-md-6 mt-2">
                                        <label for="user_id" class="form-label">Pembuat</label>
                                        <select name="user_id" id="user_id" class="form-control select2">
                                            <option selected>Pilih Pembuat</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}" {{ $user->id == $post->user_id ? 'selected' : '' }}>{{ $user->name ?? '' }}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="tags" class="form-label">tags</label>
                                        <input type="text" class="form-control @error('tags') is-invalid @enderror" id="tags" name="tags" value="{{ old('tags',$post->tags) }}">
                                        @error('tags')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="keywords" class="form-label">Keywords</label>
                                        <input type="text" class="form-control @error('keywords') is-invalid @enderror" id="keywords" name="keywords" value="{{ old('keywords',$post->keywords) }}">
                                        @error('keywords')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <label for="status" class="form-label">Status Publish</label>
                                        <select name="status" id="status" class="form-control">
                                            <option selected value="{{ $post->status }}">{{ $post->status }}</option>
                                            <option value="published">Publish</option>
                                            <option value="draft">Draft</option>

                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <h6 class="text-center">Preview Gambar</h6>
                                        <img src="{{ $post->image ? asset('storage/post/' . $post->image) : '' }}" id="output" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="row mb-7">
                                    <div class="col-md-12 mb-4">
                                        <label for="description" class="form-label">Deskripsi</label>
                                        <div id="editor">{!! $post->description !!}</div>
                                        <textarea name="description" id="content-editor" style="display: none;">{!! $post->description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <label for="extra_photo" class="form-label">Foto Tambahan</label>
                                    <input type="file" class="form-control @error('extra_photo') is-invalid @enderror" id="extra_photo" name="extra_photo[]" accept="image/*" multiple>
                                    <div class="row mt-2">
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

                                <div class="row mt-5">
                                    <div class="col-md-12 mt-5">
                                        <a href="{{ route('dashboard.post.news.index') }}" class="btn btn-danger">Kembali</a>
                                        <button type="submit" class="btn btn-primary float-end">Submit</button>
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
            quill.on('text-change', function (delta, oldDelta, source){
                $('#content-editor').text($('.ql-editor').html());
                // console.log($(".ql-editor").html());
            });
        });
    </script>


@endpush
@endsection

