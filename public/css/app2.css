<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<link  rel="stylesheet" href="{{ asset('css/app.css') }}">

<body>
    @auth
        
    
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <h3>
                General</h3>
            <hr>
            <a href="/home"><i class="fa fa-home" aria-hidden="true"></i>
                 Home</a>

            <a href="/2024/dashboard"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                Dashboard</a>

            <a href="/2024/marketing/create"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                Create</a>

            <a href="/2024/marketing/index"><i class="fa fa-table" aria-hidden="true"></i>
                Index</a>

            <a href="/2024/marketing/reminders"><i class="fa fa-bell-o" aria-hidden="true"></i>

                Reminders</a>
                <hr>
        
      </div>
      @endauth
      
      <div id="main">
        {{-- <button class="openbtn" onclick="openNav()">☰</button>   --}}

      <!-- Navbar -->
@auth
<nav class="navbar navbar-expand-md" style="padding-top: 2rem; padding-bottom: 2rem;">
    <div class="container-fluid "> <!-- Use container-fluid to ensure full width -->
        <!-- Hamburger button on the left -->
        <button class="openbtn"style="font-size:20px;  font-weight: bold;" onclick="openNav()">☰</button>

        <!-- Navbar collapse for other nav items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto"> <!-- ms-auto will push the content to the right -->
                <!-- User Info -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @if(Auth::check())
                        <b>{{ Auth::user()->name }}</b>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <i class="fa fa-power-off" aria-hidden="true"></i>
                           {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <div class="user-circle">{{ strtoupper(substr(Auth::user()->email, 0, 1)) }}</div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@endauth


            <!-- Main Content -->
            <main class="py-4">
                @yield('content')
            </main>
            <!-- End Main Content -->
        </div>
        <!-- End Page Content -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        function openNav() {
            @auth
            
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
          @endguest
        }
      
        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft = "0";
        }
      
        function updateSidebar() {
          if (window.innerWidth < 768) {
            closeNav();
          } else {
            openNav();
          }
        }
      
        window.addEventListener('resize', updateSidebar);
        window.onload = updateSidebar;
      
        // Hide sidebar if user is a guest
        @guest
        document.querySelector('.sidebar').classList.add('hidden');
        @endguest
      </script>
</body>
</html>
