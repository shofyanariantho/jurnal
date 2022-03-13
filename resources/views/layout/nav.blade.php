<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">			
    <div class="container-fluid">
        {{-- <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-search pr-1">
                            <i class="fa fa-search search-icon"></i>
                        </button>
                    </div>
                    <input type="text" placeholder="Search ..." class="form-control">
                </div>
            </form>
        </div> --}}
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                    <i class="fa fa-search"></i>
                </a>
            </li>
        

            <li class="nav-item dropdown hidden-caret">
                @auth
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="{{asset('admin/assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                @endauth
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                
                                <div class="avatar-lg"><img src="{{asset('admin/assets/img/profile.jpg')}}" alt="image profile" class="avatar-img rounded"></div>
                                <div class="u-text">
                                
                                @auth

                                <a href="#" class="d-block">{{Auth:: user() -> name }}</a>
                                <a href="#" class="d-block">{{Auth:: user() -> email }}</a><br>
                                <a href="/profil" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                @endauth
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
                @guest
                <li class="nav-item ml-2">
                    <a class="btn btn-warning btn-sm" href="/register">SIGN UP</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="btn btn-success btn-sm" href="/login">LOGIN</a>
                </li>
                @endguest
                @auth
                <li class="nav-item ml-2">
                    <a class="btn btn-warning btn-sm" href="/">Landing</a>
                </li>
                <li class="nav-item ml-2" style="color: white">
                    <a class="btn btn-danger btn-sm href="{{ route('logout') }}
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @endauth
                
            </li>
        </ul>
    </div>
</nav>
