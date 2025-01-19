<div class="post-category-container border-bottom mb-4 pb-3">
    <div class="swiper swiper-post-category" id="swiper-post-category">
        <div class="swiper-wrapper">
            <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0 {{ Route::is('artikel.index') || Route::is('artikel.show') ? 'active' : '' }}">
                <a href="{{ route('artikel.index') }}" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                    {{ translate('Artikel')}}
                </a>
            </div>
            <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0 {{ Route::is('berita.index') || Route::is('berita.show') ? 'active' : '' }}">
                <a href="{{ route('berita.index') }}" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                    {{ translate('Berita Bappeda')}}
                </a>
            </div>
            <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0 {{ Route::is('informasi.index') || Route::is('informasi.show') ? 'active' : '' }}">
                <a href="{{ route('informasi.index') }}" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                    {{ translate('Informasi')}}
                </a>
            </div>
            <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0 {{ Route::is('pembangunan_kaltim.index') || Route::is('pembangunan_kaltim.show') ? 'active' : '' }}">
                <a href="{{ route('pembangunan_kaltim.index') }}" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                    {{ translate('Kinerja Pembangunan Kaltim')}}
                </a>
            </div>
            <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0 {{ Route::is('berita_nasional.index') || Route::is('berita_nasional.show') ? 'active' : '' }}">
                <a href="{{ route('berita_nasional.index') }}" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                    {{ translate('Berita Nasional')}}
                </a>
            </div>
            {{-- <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                <a href="{{ route('social-media.index') }}" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0 {{ Route::is('social-media.index') || Route::is('social-media.show') ? 'active' : '' }}">
                    Social Media
                </a>
            </div> --}}
        </div>
    </div>

</div>


