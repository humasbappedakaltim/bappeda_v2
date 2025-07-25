@forelse ($bidangs as $bidang)
    <div class="mb-3 col-3">
        <a href="{{ route('materi_paparan.show', $bidang->slug) }}" class="gap-2 p-2 document-list-card text-decoration-none d-flex align-items-center">
            <i class="bi bi-journal-bookmark bappeda-primary-color fs-3"></i>
            <p class="p-0 m-0 bappeda-primary-color fs-7 lh-sm">{{ translate($bidang->name) }}</p>
        </a>
    </div>
@empty
    <div class="mb-3 text-center col-md-12">
        <div class="gap-2 p-3 pb-3 document-list-card position-relative text-decoration-none">
            <div class="py-2 mb-3 img-container position-relative d-flex align-items-center justify-content-center w-100">
                <p>{{ translate('Tidak Ada Data') }}</p>
            </div>
            <a href="{{ route('landing.index') }}" class="btn btn-primary">{{ translate('Kembali') }}</a>
        </div>
    </div>
@endforelse
