<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="style.css" />

    <title>Sidebar</title>
  </head>
  <style>
@import url('https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Inter", sans-serif;
  color:#2e275d;
}
body {
  background-color: #dbe2f4;
}
.container {
  display: flex;
  align-items: center;
  width: 100%;
  min-height: 100vh;
}
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 256px;
  height: 100vh;
  background-color: #fff;
  padding: 24px;
  border-radius: 30px;
  transition: all 0.3s;
}
.sidebar .head {
  display: flex;
  gap: 20px;
  border-bottom: 1px solid #f6f6f6;
}
.sidebar .nav {
  flex: 1;
}
.sidebar .menu-btn {
  position: absolute;
  right: -14px;
  top: 3.5%;
  background-color: #fff;
  border: 2px solid #f6f6f6;
}
.sidebar.active {
  width: 92px;
}
main {
  flex-grow: 1;
  margin-left: 256px;
  padding: 16px;
  transition: margin-left .5s;
}
@media screen and (max-width: 768px) {
  .sidebar,
  .sidebar.active {
    width: 100%;
    height: auto;
  }
  main {
    margin-left: 0;
  }
}

  </style>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="menu-btn">
          <i class="ph-bold ph-caret-left"></i>
        </div>
        <div class="head">
          <div class="user-img">
            <img src="user.jpg" alt="" />
          </div>
          <div class="user-details">
            <p class="title">web developer</p>
            <p class="name">John Doe</p>
          </div>
        </div>
        <div class="nav">
          <div class="menu">
            <p class="title">Main</p>
            <ul>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-house-simple"></i>
                  <span class="text">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-user"></i>
                  <span class="text">Audience</span>
                  <i class="arrow ph-bold ph-caret-down"></i>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="#">
                      <span class="text">Users</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Subscribers</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="active">
                <a href="#">
                  <i class="icon ph-bold ph-file-text"></i>
                  <span class="text">Posts</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-calendar-blank"></i>
                  <span class="text">Schedules</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-chart-bar"></i>
                  <span class="text">Income</span>
                  <i class="arrow ph-bold ph-caret-down"></i>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="#">
                      <span class="text">Earnings</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Funds</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Declines</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Payouts</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="menu">
            <p class="title">Settings</p>
            <ul>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-gear"></i>
                  <span class="text">Settings</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="menu">
          <p class="title">Account</p>
          <ul>
            <li>
              <a href="#">
                <i class="icon ph-bold ph-info"></i>
                <span class="text">Help</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="icon ph-bold ph-sign-out"></i>
                <span class="text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
            <!-- Main Content -->
            <main class="py-4">
              @yield('content')
          </main>
          <!-- End Main Content -->
      </div>
      <!-- End Page Content -->
  </div>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>
    {{-- <script src="script.js"></script> --}}
    <script>
$(document).ready(function () {
  $(".menu > ul > li").click(function (e) {
    $(this).siblings().removeClass("active");
    $(this).toggleClass("active");
    $(this).find("ul").slideToggle();
    $(this).siblings().find("ul").slideUp();
    $(this).siblings().find("ul").find("li").removeClass("active");
  });

  $(".menu-btn").click(function () {
    $(".sidebar").toggleClass("active");
  });
});

    </script>
  </body>
</html>