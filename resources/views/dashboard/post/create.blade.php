    @extends('layouts.dashboard')
    @section('title','Tambah Postingan')
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="https://cdn.bootcdn.net/ajax/libs/quill/1.3.7/quill.snow.min.css" rel="stylesheet" />
    @endpush
    @section('content')
    <h1 class="h3 mb-3">
        <strong>Tambah Postingan</strong>
    </h1>

    <div class="row">
        <div class="col-md-12 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            {{-- @include('layouts.flashmessage') --}}
                            <div class="card-body">
                                <form action="{{ route('dashboard.post.news.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-12 mt-2">
                                            <label for="title" class="form-label">Judul</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label for="category_id" class="form-label">Kategori</label>
                                            <select name="category_id" id="category_id" class="form-control select2">
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($categorys as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
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
                                            <input type="text" class="form-control @error('tags') is-invalid @enderror" id="tags" name="tags" value="{{ old('tags') }}">
                                            @error('tags')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="keywords" class="form-label">Keywords</label>
                                            <input type="text" class="form-control @error('keywords') is-invalid @enderror" id="keywords" name="keywords" value="{{ old('keywords') }}">
                                            @error('keywords')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="status" class="form-label">Status Publish</label>
                                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                                <option selected disabled>Pilih Status</option>
                                                <option value="0">Draf</option>
                                                <option value="1">Publish</option>

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
                                            <img src="" id="output" class="img-preview img-fluid mb-3" style="border-radius: 10px;">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-md-12 mb-4">
                                            <label for="description" class="form-label">Deskripsi</label>
                                            <div id="editor"></div>
                                            <textarea name="description" id="content-editor" style="display: none;"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3 mt-7">
                                        <div class="col-md-12">
                                            <label for="extra_photo" class="form-label">Foto Tambahan</label>
                                            <input type="file" class="form-control @error('extra_photo') is-invalid @enderror" id="extra_photo" name="extra_photo[]" accept="image/*" multiple>
                                            @error('extra_photo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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
    <script defer src="https://cdn.bootcdn.net/ajax/libs/quill/1.3.7/quill.min.js"></script>
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

                var quill = new Quill('#editor', {
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


                quill.on('text-change', function (delta, oldDelta, source) {
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
                            formData.append('gambar_upload', file); // Sesuaikan dengan key di backend

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

