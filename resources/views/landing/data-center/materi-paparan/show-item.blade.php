 @forelse($materiPaparan as $data)
 <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
     <div class="gap-2 p-3 pb-3 document-list-card position-relative text-decoration-none">
         <div class="py-2 mb-3 img-container position-relative d-flex align-items-center justify-content-center w-100">
             @if($data->cover != null)
             <img id="coverImage" src="{{ asset('storage/materi-paparan/cover/' . $data->cover) }}" alt="Cover Materi"
                 class="img-fluid w-100"
                 onerror="this.onerror=null; this.src='{{ asset('assets/images/pdf-file-format.png') }}';">
             @else
             <img src="{{ asset('assets/images/pdf-file-format.png') }}" alt="Default Cover" class="img-fluid w-100">
             @endif
         </div>
         <p class="p-0 m-0 mb-2 list-category text-grey text-start fs-8 lh-sm w-100">{{ translate($slug ?? '-') }}</p>
         <p class="p-0 m-0 mb-3 list-title text-start fs-8 lh-sm w-100">{{ translate($data->name) }}</p>
         <div class="gap-2 px-2 py-1 m-0 mb-3 download-btn bappeda-primary-bg d-flex align-items-center float-end fs-7">
             <i class="text-white bi bi-cloud-arrow-down"></i>
             <a href="{{ route('materi_paparan.download', $data->slug) }}" download="{{ $data->file }}" target="__blank"
                 class="text-white text-decoration-none fw-500 lh-sm">{{ translate('Unduh') }}</a>
         </div>
     </div>
 </div>
 @empty
 <div class="mb-3 text-center col-md-12">
     <div class="gap-2 p-3 pb-3 document-list-card position-relative text-decoration-none">
         <div class="py-2 mb-3 img-container position-relative d-flex align-items-center justify-content-center w-100">
             <p>{{ translate('Tidak Ada Data') }}</p>
         </div>
         <a href="{{ route('materi_paparan.index') }}" class="btn btn-primary">{{ translate('Kembali') }}</a>
     </div>
 </div>
 @endforelse
