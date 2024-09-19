<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="https://unpkg.com/vue3-google-map"></script>
</head>
<body>
    <div id="app">
         <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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
                            <li class="nav-item dropdown">
                            
                             <a class="nav-link" href="{{route('cart')}}" style="display: inline !important !important; margin-left: 97% !important"><i class="bi bi-basket" style="padding: -10px !important"></i></a>
                       
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="margin-top: -37px !important; margin-left: 20px !important" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                @role('admin')
                                <a class="nav-link blockOneHide3" style="margin-top: -37px !important; margin-left: 45% !important" href="{{url('/admin_panel')}}">
                                    Admin
                                </a>
                                @endrole
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container submenu">
            <div class="row">
                <div class="col-12">
                    <a href="#" class="subtext">Paint pots</a>
                    <a href="#" class="subtext">Ceramics</a>
                    <a href="#" class="subtext">Tables</a>
                    <a href="#" class="subtext">Chairs</a>
                    <a href="#" class="subtext">Crockery</a>
                    <a href="#" class="subtext">Tableware</a>
                    <a href="#" class="subtext">Cutlery</a>
                    @role('admin')
                        <a href="{{url('/admin_panel')}}" class="subtext">Admin</a>
                    @endrole
                </div>
                
               
            </div>
        </div>
    </header>
    <div class="col-12 blockOneHide textColorWhite">
            <h1>The furniture brand for the future, with timeless designs</h1>
            <h6>A new era in eco friendly furniture with Avelon, the French luxury retail brand with nice fonts, tasteful colors and a beautiful way to display things digitally using modern web technologies.</h6>
            <button class="btn btnMiddle">View collection</button>
        </div>
        <main class="container">
            @yield('content')
        </main>
        <div class="blockOneHide2">
            <h2>From a studio in London to a global brand with over 400 outlets</h2>
            <p>When we started Avion, the idea was simple. Make high quality furniture affordable and available for the mass market.   Handmade, and lovingly crafted furniture and homeware is what we live, breathe and design so our Chelsea boutique become the hotbed for the London interior design community.</p>
            <button type="button" class="btn btn-primary btnMiddleTwo">Get in touch</button>
        </div>
        <div class="blockOneHide2">
            <img src="https://images.unsplash.com/photo-1550226891-ef816aed4a98?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80">
        </div>
<footer class="footerColor text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row" style="margin-top: 2% !important">
      <!--Grid column-->
        <div class="col-2 footerHide" style="padding-left: 3%;">
            <h5 class="text-uppercase textColorWhite">Menu</h5>
            <a class="linkFooter" href="#">New arrivals</a>
            <a class="linkFooter" href="#">Best sellers</a>
            <a class="linkFooter" href="#">Recently viewed</a>
            <a class="linkFooter" href="#">Popular this week</a>
            <a class="linkFooter" href="#">All products</a>
        </div>
      <!--Grid column-->
         <div class="col-2 footerHide" style="padding-left: 3%;">
                    <h5 class="text-uppercase textColorWhite">Categories</h5>
                            <a class="linkFooter" href="#">Crockery</a>
                            <a class="linkFooter" href="#">Furniture</a>
                            <a class="linkFooter" href="#">Homeware</a>
                            <a class="linkFooter" href="#">Plant pots</a>
                            <a class="linkFooter" href="#">Chairs</a>
                            <a class="linkFooter"  href="#">Crockery</a>
                </div>
      <!--Grid column-->
   <div class="col-2 footerHide" style="padding-left: 3%;">
                    <h5 class="text-uppercase textColorWhite">Our company</h5>
                    <a class="linkFooter" href="#">About us</a>
                    <a class="linkFooter" href="#">Vacancies</a>
                    <a class="linkFooter" href="#">Contact us</a>
                    <a class="linkFooter" href="#">Privacy</a>
                    <a class="linkFooter" href="#">Return policy</a>
                </div>
      <!--Grid column-->
{{-- <div class="col-6">
                    <h5 style="color:white">Company name</h5>
                    <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
                        {{-- <form class="row g-3">
                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Password</label>
                                <input type="email" id="inputPassword2" class="regInput2" style="width: 350px !important" placeholder="your@gmail.com">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn signUp2">Sign up</button>
                            </div>
                        </form> --}}
                    {{-- </div>  --}}
    {{-- </div> --}}
    <div class="col-lg-6 col-md-12 mb-4 mb-md-0 textColorWhite">
          <h5 class="text-uppercase">Footer Content</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); color: white;">
    © 2024 Copyright: Avion
  </div>
  <!-- Copyright -->
</footer>
    </div>
</body>
</html>

