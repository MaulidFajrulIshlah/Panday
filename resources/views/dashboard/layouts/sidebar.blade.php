<div class="bg-white px-3" class="sidebar-nav" id="sidebar-wrapper" style="width: 220px;">
    <ul class="sidebar-nav py-4" id="sidebar-nav">
        <li class="nav-heading mb-2">Dashboard</li>

        <a href="{{ route('beranda') }}"
            class="link list-group-item second-text navSidebar rounded mb-2 {{ 'dashboard/beranda' == request()->path() ? 'active' : '' }}"><i
                class="fas fa-home me-2"></i>Beranda</a>
        <a href="{{ route('mataKuliah') }}"
            class="link list-group-item  second-text navSidebar rounded mb-2 {{ 'dashboard/matakuliah' == request()->path() ? 'active' : '' }}"><i
                class="fas fa-book me-2"></i>Mata Kuliah</a>
        <a href="{{ route('akademik') }}"
            class="link list-group-item  second-text navSidebar rounded mb-2 {{ 'dashboard/akademik' == request()->path() ? 'active' : '' }}"><i
                class="fas fa-file-alt me-2"></i>Akademik</a>
        <a href="{{ route('pengecekanServer') }}"
            class="link list-group-item  second-text navSidebar rounded mb-2 {{ 'dashboard/pengecekanserver' == request()->path() ? 'active' : '' }}"><i
                class="fas fa-file-alt me-2"></i>Pengecekan Server</a>

        @can('admin')
            <li class="nav-heading pt-4 mb-2">Master Data</li>
            <a href="{{ route('masterUser') }}"
                class="link list-group-item  second-text navSidebar rounded mb-2 {{ 'masterdata/pengguna' == request()->path() ? 'active' : '' }}"><i
                    class="fas fa-user-friends me-2"></i>Pengguna</a>
        @endcan
        <a href="{{ route('logout') }}" class="list-group-item rounded logout-link"><i
                class="fas fa-sign-out-alt me-2"></i>Keluar</a>
    </ul>
</div>
