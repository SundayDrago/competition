<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>COMPETITION</em> SITE</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
            
          </ul>
        </li>
        <li><a href="#section4">Courses</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contact</a></li>

        @if(Route::has('login'))
        @auth

        <x-app-layout>
        </x-app-layout>

        @else
        <li><a href="{{route('login')}}" class="external">Login</a></li>
        <li><a href="{{route('register')}}" class="external">Register</a></li>

        @endauth
        @endif
      </ul>
    </nav>
  </header>