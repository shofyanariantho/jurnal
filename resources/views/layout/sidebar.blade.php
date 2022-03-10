<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item @yield('sb-dashboard')">
                    <a href="/" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>

                <li class="nav-item @yield('sb-jurnal-button')">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Jurnal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @yield('sb-jurnal')" id="base">
                        <ul class="nav nav-collapse">
                            <li class=@yield('sb-jurnal-list')>
                                <a href="/list-jurnal">
                                    <span class="sub-item">List Jurnal</span>
                                </a>
                            </li>
                            <li  class=@yield('sb-jurnal-add')>
                                <a href="/add-jurnal">
                                    <span class="sub-item">Tambah Jurnal</span>
                                </a>
                            </li>
                            <li class= @yield('sb-jurnal-kategori')>
                                <a href="/kategori-jurnal">
                                    <span class="sub-item">Kategori</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>           
        </div>
    </div>
</div>