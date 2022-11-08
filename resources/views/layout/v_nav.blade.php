<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="nav-small-cap">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span class="hide-menu">HOME</span>
            </li>
            <li class="sidebar-item">
                <a href="/dashboard" class="sidebar-link">
                    <i class="bi bi-speedometer2"></i>
                    <span class="hide-menu"> Dashboard </span>
                </a>
            </li>
            @if (auth()->user()->role == 'admin')
                <li class="sidebar-item">
                    <a href="/bidan" class="sidebar-link">
                        <span class="hide-menu"> Bidan </span>
                    </a>
                </li>
            @endif

            <li class="nav-small-cap">
                <i class="fa fa-book" aria-hidden="true"></i>
                <span class="hide-menu">PEMERIKSAAN</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                    aria-expanded="false">
                    <span class="hide-menu">Cek </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item">
                        <a href="/pasien" class="sidebar-link">
                            <span class="hide-menu"> Pasien </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/pemeriksaan" class="sidebar-link">
                            <span class="hide-menu"> Hasil Pemeriksaan </span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                    aria-expanded="false">
                    <span class="hide-menu">PEMERIKSAAN </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item">
                        <a href="/anak/periksa" class="sidebar-link">
                            <i class="mdi mdi-book-multiple"></i>
                            <span class="hide-menu"> anak </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/ibu/periksa" class="sidebar-link">
                            <i class="mdi mdi-book-plus"></i>
                            <span class="hide-menu"> ibu </span>
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
