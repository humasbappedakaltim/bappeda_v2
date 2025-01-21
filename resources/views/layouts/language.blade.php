<li class="nav-item align-items-center mx-1">
    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="localeDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 5px;">
            @if(app()->getLocale() == 'id')
                <img src="{{ asset('assets/images/indonesia-round-icon.png') }}" alt="Selected Language" style="width: 20px;">
            @else
                <img src="{{ asset('assets/images/english.png') }}" alt="Selected Language" style="width: 20px;">
            @endif
        </button>
        <ul class="dropdown-menu" aria-labelledby="localeDropdown" style="left: -80px !important; padding: 10px;">
            <li>
                <a class="dropdown-item" href="{{ url()->current() }}?lang=id">
                    <img src="{{ asset('assets/images/indonesia-round-icon.png') }}" alt="Indonesia" style="width: 25px;"> Indonesia
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ url()->current() }}?lang=en">
                    <img src="{{ asset('assets/images/english.png') }}" style="width: 25px;"> English
                </a>
            </li>
        </ul>
    </div>
</li>
