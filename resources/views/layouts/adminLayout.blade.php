<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dream Fields</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name"><a href={{route('welcome')}}><img src="{{URL::asset('images/DreamFields Logo(full)-01.png')}}" alt="..." width="80%"/></a></div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="/">
          <i class='bx bx-home'></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="{{route('admin')}}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{route('userspage')}}">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="{{route('condounits')}}">
         <i class='bx bx-building-house' ></i>
         <span class="links_name">Condo Units</span>
       </a>
       <span class="tooltip">Condo Units</span>
     </li>
     <li>
       <a href="{{route('pendingunits')}}">
         <i class='bx bx-food-menu' ></i>
         <span class="links_name">Pending Units</span>
       </a>
       <span class="tooltip">Pending Units</span>
     </li>
     <li>
       <a href="{{route('backlogs')}}">
         <i class='bx bx-align-middle' ></i>
         <span class="links_name">BackLogs</span>
       </a>
       <span class="tooltip">BackLogs</span>
     </li>
     
     <li class="profile">

      <a href="{{ route('logout') }}"  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
         <i class='bx bx-log-out' id="log_out" ></i>
         <span class="links_name">&nbsp &nbsp &nbsp Logout</span>
      </a>
     </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">@yield('header') <span class="ml-10">Hello! <strong>{{ Auth::user()->name }}</strong></span></div> 
    <main class="container">
      @yield('content')
    </main>
  </section>

  
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>
</body>
</html>