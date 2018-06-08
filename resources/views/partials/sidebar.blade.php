<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/logo-custom.png" height="125" width="125" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('siswa.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Siswa</a>
                        </li>
                        <li>
                            <a href="{{route('guru.index')}}">
                                <i class="fas fa-table"></i>Data Guru</a>
                        </li>
                        <li>
                            <a href="{{route('absensisiswa.index')}}">
                                <i class="far fa-check-square"></i>Absensi Siswa</a>
                        </li>
                        <li>
                            <a href="{{route('absensiguru.index')}}">
                                <i class="fas fa-calendar-alt"></i>Absensi Guru</a>
                        </li>
                        <li>
                            <a href="{{route('petugaspiket.index')}}">
                                <i class="fas fa-map-marker-alt"></i>Petugas Piket</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        