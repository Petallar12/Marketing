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
<style>
     * {
      font-family: 'Roboto', sans-serif;
      
    }
    #content.with-sidebar {
    padding-left: 200px; /* width of the sidebar */
    transition: padding-left 0.3s ease;
}
.user-info {
    display: flex;
    align-items: center;
    padding: 10px;
}

.user-circle {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #007bff; /* Adjust the color as needed */
    color: white;
    text-align: center;
    line-height: 30px;
    margin-right: 10px; /* Adjust the space between the circle and the name */
}

.sidebar-footer {
    position: absolute;
    bottom: 0;
    width: 200px; /* Match this to your sidebar width if it's different */
    background: rgba(0,0,0,0.1); /* Optional: for contrast */
}

.nav-link.dropdown-toggle {
    padding-left: 0; /* Removes padding to bring text closer */
    color: #333;
    text-decoration: none; /* Removes underline */
    background: none; /* Removes any background styling */
}

/* Ensure that other styles are not affecting the layout */
/* Add additional resets if needed */

.sidebar-footer .nav-item {
    list-style-type: none; /* Removes bullet points if they are appearing */
}

.sidebar-footer .nav-link {
    padding: 10px; /* Adjust padding to match other links */
    font-weight: bold;
    color: #333;
    text-decoration: none; /* Removes underline */
    display: block; /* Ensures it takes up full width like a block element */
}

.sidebar-footer .nav-link:hover {
    background-color: #f0f0f0; /* Match the hover effect of other list items */
}

.sidebar-footer .dropdown-menu {
    width: 100%; /* Ensures dropdown width matches the sidebar width */
}
.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    
    height: 100%;
    width: 200px;
    background-color: rgba(255, 255, 255, 0.9);
    overflow-y: auto;
    transition: left 0.3s ease;
    border: none;
    box-shadow: none !important; /* This line removes the shadow */
}
.navbar{
    outline: 2px solid rgba(255, 255, 255, 0.9); /* This sets a red outline with a width of 2px and solid style */

}

    .sidebar.hidden {
        left: -250px; /* Hide the sidebar */
    }

    .sidebar-header {
        padding: 10px;
    }

    .logo {
        height: 170px;

    }

    .list-unstyled {
        padding-left: 5px;
    }

    .list-unstyled li {
        margin-bottom: 10px;
    }

    .list-unstyled li a {
        display: block;
        padding: 5px;
        font-weight: bold;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .list-unstyled li a:hover {
        background-color: #f0f0f0;
    }

    .active > a {
        font-weight: bold;
        color: #007bff;
    }


</style>
<body>
    <div id="app">
        <!-- Sidebar -->
        @auth
        
        <nav class="sidebar bg-white shadow-sm">
            <div class="sidebar-header">

            </div>  
            <ul class="list-unstyled components">
                
                <li class="active">
                    <h3>General</h3>
                
                </li>
                <li>
                    <a href="/home"><i class="fa fa-home" aria-hidden="true"></i>
                         Home</a>
                </li>
                <li>
                    <a href="#dashboard"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                        Dashboard</a>
                </li>
                <li>
                    <a href="/2024/marketing/create"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Create</a>
                </li>
                <li>
                    <a href="/2024/marketing/index"><i class="fa fa-table" aria-hidden="true"></i>
                        Index</a>
                </li>
                <li>
                    <a href="/2024/marketing/reminders"><i class="fa fa-bell-o" aria-hidden="true"></i>

                        Reminders</a>
                </li>
            </ul>
            <hr>    

            <div class="sidebar-footer">
                <li class="nav-item dropdown">
                    <div class="sidebar-footer">
                        <div class="user-info">
                            <div class="user-circle">{{ strtoupper(substr(Auth::user()->email, 0, 1)) }}</div>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
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
            </div>
        </nav>
        
        @endauth
        <!-- End Sidebar -->

        <!-- Page Content -->
        <div id="content" class="container-fluid {{ auth()->check() ? 'with-sidebar' : '' }}">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a href="{{ url('/home') }}"><img src="/assets/images/digitalmarketing.png" alt="Marketing Logo" class="logo"></a>
                    {{-- <a class="navbar-brand me-auto" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> --}}
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav">
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                               
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

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


        // Hide sidebar if user is a guest
        @guest
        document.querySelector('.sidebar').classList.add('hidden');
        @endguest
    </script>
</body>
</html>
