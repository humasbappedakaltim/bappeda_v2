<li class="sidebar-header">
    Pages
</li>

<li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard') }}">
        <i class="align-middle" data-feather="sliders"></i> <span
            class="align-middle">Dashboard</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('dashboard.sliders.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.sliders.index') }}">
        <i class="align-middle" data-feather="image"></i> <span class="align-middle">Slider Welcome</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('dashboard.agenda.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.agenda.index') }}">
        <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Agenda</span>
    </a>
</li>


<li class="sidebar-item ">
    <a class="sidebar-link {{ request()->routeIs('dashboard.data.center.*') || request()->routeIs('dashboard.category.data.center.*') ? 'collapsed' : '' }}" href="#dataCenterDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="dataCenterDropdown">
        <i class="align-middle" data-feather="database"></i> <span class="align-middle">Data Center</span>
        <i class="align-middle float-end" data-feather="chevron-right"></i>
    </a>
    <ul class="collapse list-unstyled mx-4 {{ request()->routeIs('dashboard.data.center.*') || request()->routeIs('dashboard.category.data.center.*') ? 'show' : '' }}" id="dataCenterDropdown">
        <li class="sidebar-item {{ request()->routeIs('dashboard.category.data.center.*') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.category.data.center.index') }}">
                <i class="align-middle" data-feather="list"></i><span class="align-middle">Kategori Data</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->routeIs('dashboard.data.center.index') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.data.center.index') }}">
                <i class="align-middle" data-feather="database"></i><span class="align-middle">Data Center</span>
            </a>
        </li>
    </ul>
</li>

<li class="sidebar-item ">
    <a class="sidebar-link {{ request()->routeIs('dashboard.post.*') ? 'collapsed' : '' }}" href="#post" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="post">
        <i class="align-middle" data-feather="book"></i> <span class="align-middle">Postingan</span>
        <i class="align-middle float-end" data-feather="chevron-right"></i>
    </a>
    <ul class="collapse list-unstyled mx-4 {{ request()->routeIs('dashboard.post.*') ? 'show' : '' }}" id="post">
        <li class="sidebar-item {{ request()->routeIs('dashboard.post.category.*') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.post.category.index') }}">
                <i class="align-middle" data-feather="list"></i><span class="align-middle">Kategori Postingan</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->routeIs('dashboard.post.news.index') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.post.news.index') }}">
                <i class="align-middle" data-feather="book"></i><span class="align-middle">Postingan</span>
            </a>
        </li>
    </ul>
</li>

<li class="sidebar-item {{ request()->routeIs('dashboard.penghargaan.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.penghargaan.index') }}">
        <i class="align-middle" data-feather="award"></i> <span class="align-middle">Penghargaan</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('dashboard.app.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.maps.index') }}">
        <i class="align-middle bx bx-map" ></i> <span class="align-middle">Peta</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('dashboard.app-bappeda.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.app-bappeda.index') }}">
        <i class="align-middle bx bx-link-external" ></i> <span class="align-middle">Aplikasi Bappeda</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link {{ request()->routeIs('dashboard.bidang.*') || request()->routeIs('dashboard.sub.bidang.*') ? '' : 'collapsed' }}"
       href="#bidang"
       data-bs-toggle="collapse"
       role="button"
       aria-expanded="{{ request()->routeIs('dashboard.bidang.*') || request()->routeIs('dashboard.sub.bidang.*') ? 'true' : 'false' }}"
       aria-controls="bidang">
        <i class="align-middle bx bx-group"></i> <span class="align-middle">Bidang</span>
        <i class="align-middle float-end" data-feather="chevron-right"></i>
    </a>
    <ul class="collapse list-unstyled mx-4 {{ request()->routeIs('dashboard.bidang.*') || request()->routeIs('dashboard.sub.bidang.*') ? 'show' : '' }}" id="bidang">
        <li class="sidebar-item {{ request()->routeIs('dashboard.bidang.*') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.bidang.index') }}">
                <i class="align-middle bx bx-group"></i> <span class="align-middle">Bidang</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->routeIs('dashboard.sub.bidang.*') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.sub.bidang.index') }}">
                <i class="align-middle bx bx-group"></i> <span class="align-middle">Sub Bidang</span>
            </a>
        </li>
    </ul>
</li>

<li class="sidebar-item">
    <a class="sidebar-link {{ request()->routeIs('dashboard.pejabat.*') ? 'active' : '' }}" href="{{ route('dashboard.pejabat.index') }}">
        <i class="align-middle bx bx-user"></i> <span class="align-middle">Pegawai</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('dashboard.pio.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.pio.index') }}">
        <i class="align-middle bx bx-envelope" ></i> <span class="align-middle">Pio</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('dashboard.survei.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.survei.index') }}">
        <i class="align-middle bx bxs-inbox" ></i> <span class="align-middle">Survei</span>
    </a>
</li>


{{-- <li class="sidebar-item">
    <a class="sidebar-link" href="pages-blank.html">
        <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
    </a>
</li> --}}

{{-- <li class="sidebar-header">
    Tools & Components
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="ui-buttons.html">
        <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="ui-forms.html">
        <i class="align-middle" data-feather="check-square"></i> <span
            class="align-middle">Forms</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="ui-cards.html">
        <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="ui-typography.html">
        <i class="align-middle" data-feather="align-left"></i> <span
            class="align-middle">Typography</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="icons-feather.html">
        <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
    </a>
</li> --}}

<li class="sidebar-header">
    Settings
</li>

{{-- Settings --}}
<li class="sidebar-item ">
    <a class="sidebar-link {{ request()->routeIs('dashboard.settings.*') ? 'collapsed' : '' }}" href="#settingsDropDown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="settingsDropDown">
        <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Pengaturan</span>
        <i class="align-middle float-end" data-feather="chevron-right"></i>
    </a>
    <ul class="collapse list-unstyled mx-4 {{ request()->routeIs('dashboard.settings.*') ? 'show' : '' }}" id="settingsDropDown">

        <li class="sidebar-item {{ request()->routeIs('dashboard.settings.roles.*') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.settings.roles.index') }}">
                <i class="align-middle" data-feather="list"></i><span class="align-middle">Role</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->routeIs('dashboard.settings.users.*') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.settings.users.index') }}">
                <i class="align-middle" data-feather="users"></i><span class="align-middle">Pengguna</span>
            </a>
        </li>
    </ul>
</li>
