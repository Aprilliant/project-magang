<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>



        <li class="nav-item ">
            <a class="nav-link collapsed " href="/penugasan">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tugas Kunjungan</span>
            </a>
        </li>



        <li class="nav-item ">
            <a class="nav-link  collapsed" href="/nasabah">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Nasabah</span>
            </a>
        </li>



        <li class="nav-item ">
            <a class="nav-link collapsed" href="/data_pegawai">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Pegawai</span>
            </a>
        </li>



        <li class="nav-item ">
            <a class="nav-link collapsed " href="/laporan">
                <i class="bi bi-layout-text-window-reverse"></i><span>Laporan</span>
            </a>
        </li>


        @auth
        @if (Auth::user()->id == '3')
        <li class="nav-item ">
            <a class="nav-link collapsed " href="{{ url('/penugasan/create') }}">
                <i class="bi bi-layout-text-window-reverse"></i><span>Penugasa</span>
            </a>
        </li>
        @endif
        @endauth







    </ul>

</aside>