<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"> 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/bo.css') }}"> 
    @yield('styles')
     
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                @if(auth()->check()) 
                    @if(isset($title))
                    <h3>{{$title}}</h3>
                    @endif
                @endif
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @if(auth()->check()) 
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('absence.index')}}">Absensi</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('value.index')}}">Pencatatan Value</a>
                          </li> 
                          @endif
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
                            {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

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
                            </li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            @if(auth()->check()) 
                <nav class="navbar fixed-bottom navbar-light bg-light shadow-sm mx-20 px-20">
                    <div class="container">
                        <a class="navbar-brand" href="{{route('home')}}"><i class="fa fa-home"></i></a>
                        <a class="navbar-brand" href="#"><i class="fa fa-praying-hands"></i></a>
                        <a class="navbar-brand" href="#"><i class="fa fa-gift"></i></a>
                        
                        <div class="navbar-brand settings">
                            <i class="fa fa-cog"></i> 
                        </div>  
                        <ul class="d-none setting-menus">
                            <li><a href="{{route('management.account')}}"><i class="fa fa-user"></i> Account </a></li> 
                            <li><a href="{{route('management.absence')}}"><i class="fa fa-clock"></i>Absensi </a></li> 
                            <li><a href="{{route('management.value')}}"><i class="fa fa-praying-hands"></i>Value </a></li> 
                            <li><a href="{{route('management.team')}}"><i class="fa fa-users"></i>Team </a></li> 
                        </ul>
                        
                    </div>
                </nav> 
            @endif
        </footer> 
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
    <script>
    $(function() {     
        $('.settings').on('click', function(e) {
          e.preventDefault();
          if($('.setting-menus').hasClass('d-none')){
              $('.setting-menus').removeClass('d-none');
          }else{
            $('.setting-menus').addClass('d-none');
          }
        });
      });
    </script>
</body>
</html>
