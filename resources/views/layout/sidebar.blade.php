<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item @yield('sb-dashboard')">
                    <a href="/dashboard" aria-expanded="false">
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
                                <a href="/jurnal">
                                    <span class="sub-item">List Jurnal</span>
                                </a>
                            </li>
                            <li  class=@yield('sb-jurnal-add')>
                                <a href="/jurnal/create">
                                    <span class="sub-item">Tambah Jurnal</span>
                                </a>
                            </li>
                            <li class= @yield('sb-jurnal-kategori')>
                                <a href="/admin/jurnal/kategori">
                                    <span class="sub-item">Kategori</span>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </li>

                <li class="nav-item">
                    <a href="/profile" class="nav-link">
                        <i class="nav-icon fa fa-camera-retro"></i>
                        <p>Profile</p>
                        <span class="right badge badge-danger"></span>  
                    </a>
                </li>
            </ul>           
        </div>
    </div>
</div>

