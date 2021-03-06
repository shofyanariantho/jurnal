    <!-- Favicon  -->
    <link rel="icon" href="{{asset('landing/images/favicon.png')}}" />
  </head>
  <body data-spy="scroll" data-target=".fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Revo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="/"
          ><img src="{{asset('landing/images/logo.svg')}}" alt="journal" />
          <p class="navbar-brand logo-text">Journal Edu</p></a
        >

        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item dropdown mr-3">
              <a class="nav-link dropdown-toggle" href="#journal" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">JOURNAL</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item page-scroll" href="/journal">LIST JOURNAL</a>
              </div>
            </li> --}}
            @guest
                
            
            <li class="nav-item mr-3">
                <a class="btn-outline-nav" href="/register">SIGN UP</a>
                <a class="btn-solid-dash" href="/dashboard">Go To Dashboard</a> 
            </li>
            @endguest
            @auth
            <a class="btn-solid-dash" href="/dashboard">Go To Dashboard</a> 
              <li class="nav-item">
                <a class="btn-solid-logout href="{{ route('logout') }}
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            
          
        @endauth
          </ul>
          
        </div>
        <!-- end of navbar-collapse -->
      </div>
      <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->