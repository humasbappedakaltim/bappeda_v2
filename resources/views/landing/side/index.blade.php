<div class="col-12 col-lg-5 order-3 order-lg-2 m-0 mb-5 p-0 ps-0 ps-lg-4">
    <div class="row m-0 p-0">
        <div class="col-12 m-0 mb-5 p-0">
            <div class="post-searching-container post-sidebar-container position-relative px-3 py-4">
                <div class="title-content d-flex align-items-center justify-content-between mb-3">
                    @php
                        // Mapping route dengan kategori yang sesuai
                        $titles = [
                            'berita.index' => 'Berita',
                            'artikel.index' => 'Artikel',
                            'informasi.index' => 'Informasi',
                            'kinerja.index' => 'Kinerja',
                            'pembangunan_kaltim.index' => 'Pembangunan Kaltim',
                            'berita_nasional.index' => 'Berita Nasional',
                        ];

                        $currentRouteName = Route::currentRouteName();

                        // Judul berdasarkan rute aktif atau fallback ke 'Pencarian'
                        $title = $titles[$currentRouteName] ?? 'Pencarian';

                        // Tentukan rute yang digunakan berdasarkan kondisi
                        $searchRoute = in_array($currentRouteName, [
                            'berita.index',
                            'artikel.index',
                            'informasi.index',
                            'kinerja.index',
                            'pembangunan_kaltim.index',
                            'berita_nasional.index'
                        ])
                            ? $currentRouteName
                            : 'berita.index';
                    @endphp

                    <p class="title fs-4 m-0 p-0">Pencarian {{ $title }}</p>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>

                <form
                    action="{{ route($searchRoute) }}"
                    method="GET"
                    class="input-search position-relative">
                    @if ($searchRoute === 'berita.index')
                        <input type="search" name="search" class="custom-form-control m-0 p-2 w-100" placeholder="Masukkan Keyword..." value="{{ old('search') }}">
                    @else
                        <input type="search" name="search" class="custom-form-control m-0 p-2 w-100" placeholder="Keyword untuk {{ $title }}..." value="{{ old('search') }}">
                    @endif
                    <i class="bi bi-search icon-search m-0 p-0"></i>
                </form>
            </div>

        </div>


        <div class="col-12 m-0 mb-5 p-0">
            <div class="post-content-item post-sidebar-container position-relative px-3 py-4">
                <div class="title-content d-flex align-items-center justify-content-between">
                    <p class="title fs-4 m-0 p-0">Postingan Lainnya</p>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>

                @php
                    // Mapping categories ke rute yang sesuai
                    $routeMap = [
                        'Berita' => 'berita.show',
                        'Artikel' => 'artikel.show',
                        'Informasi' => 'informasi.show',
                        'Kinerja' => 'kinerja.show',
                        'Pembangunan Kaltim' => 'pembangunan_kaltim.show',
                        'Berita Nasional' => 'berita_nasional.show',
                    ];
                @endphp

                @forelse($posts as $post)
                    @php
                        // Ambil nama kategori dari post
                        $categoryName = $post->category->name;

                        // Jika kategori ditemukan dalam map, gunakan rutenya, jika tidak gunakan 'lainnya.show'
                        $routeName = $routeMap[$categoryName] ?? 'berita.show';

                        // Buat URL berdasarkan apakah rutenya memerlukan parameter
                        $url = $routeName === 'lainnya.show'
                            ? route($routeName, ['slug' => $post->slug])
                            : route($routeName, ['slug' => $post->slug]);
                    @endphp

                    <a href="{{ $url }}" class="d-flex gap-3 text-decoration-none text-black mt-4 p-1">
                        <div class="img-container m-0 p-0">
                            @php
                                    $imageFilename = basename(str_replace('\\', '/', $post->image));
                                @endphp
                            <img src="{{ asset('storage/post/' . $imageFilename) }}" alt="post-img">
                        </div>
                        <div class="about-content d-flex flex-column m-0 p-0">
                            <div class="title fs-8 lh-sm m-0 mb-2 p-0">
                                {{ $post->title }}
                            </div>
                            <div class="d-flex gap-2 align-items-center text-grey">
                                <p class="author text-capitalize m-0 p-0">
                                    {{ $post->category->name }}
                                </p>
                                <p class="m-0 p-0">|</p>
                                <p class="date text-capitalize m-0 p-0">
                                    {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('l, d F Y') }}
                                </p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-center">Tidak ada postingan.</p>
                @endforelse
            </div>
        </div>

        <div class="col-12 m-0 p-0">
            <div class="post-date-content post-sidebar-container position-relative px-3 py-4">
                <div class="title-content d-flex align-items-center justify-content-between mb-4">
                    <p class="title fs-4 m-0 p-0">Arsip Postingan</p>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>
                @forelse ($arsip as $item)

                <a href="{{ route('arsip.show', $item->year) }}" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                    <p class="m-0 p-0">Tahun {{ $item->year }} <span class="badge bg-primary rounded ml-3">{{ $item->total }} Postingan</span></p>
                    <i class="bi bi-chevron-right"></i>
                </a>

                @empty

                @endforelse

            </div>
        </div>
    </div>
</div>
