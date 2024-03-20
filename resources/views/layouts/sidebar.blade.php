<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link  rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Side Menu</title>
    </head>
<body>
    
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-dark sidebar-fixed col-auto min-vh-100">
<br>
                <div class="bg-dark">
                    <a href="{{ url('/home') }}"><img src="/assets/images/logo.png" alt="Marketing Logo" class="logo"></a>
                    <a class="navbar-brand text-white" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-home"></i><span class="fs-4 ms-3 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-clipboard"></i><span class="fs-4 ms-3 d-none d-sm-inline">Database</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-pencil"></i><span class="fs-4 ms-3 d-none d-sm-inline">Create</span>
                            </a>
                        </li>
                      
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">   Hello</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="dropdown open p-3">
                    <button class="btn border-none dropdown-toggle text-white" type="button" id="triggerId">
                            <i class="fa fa-home"></i><span class=""ms-2>Home</span>
                    </button><br>
    
             

                    <button class="btn border-none dropdown-toggle text-white" type="button" id="triggerId">
                            <i class="fa fa-clipboard"></i><span class=""ms-2>Databases</span>
                    </button><br>
    
           

                    <button class="btn border-none dropdown-toggle text-white" type="button" id="triggerId">
                            <i class="fa fa-pencil"></i><span class=""ms-2>Create</span>
                    </button><br>
           
                <button class="btn border-none dropdown-toggle text-white" type="button" id="triggerId">
                        <i class="fa fa-user"></i><span class=""ms-2>Dashboards</span>
                </button><br>

                <button class="btn border-none dropdown-toggle text-white" type="button" id="triggerId">
                    <i class="fa fa-user"></i><span class=""ms-2>Logout</span>
            </button>

            </div>
            </div>
            
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>