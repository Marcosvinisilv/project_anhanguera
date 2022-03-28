<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Ragnaproject') }}</title>
    <link rel="shortcut icon" href="{{ asset('/bg/ragnaproject.ico')}}" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    
    @stack('styles')
    <style>
        .addpaddingtop{
            padding-top: 4.5rem !important;
        }
    </style>
</head>
<body>
    <div id="app" >
        
        @yield('login')
        
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" id="navbarM">
            <div class="container-fluid" id="navfluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                <a class="navbar-brand navlogo" href="#"><img class="img-fluid" style="width:100px" src="{{ asset('/bg/ragnaproject.png')}}" alt=""></a>
                </ul>
               <br><br>
                <ul class="navbar-nav">
                    @if (Auth::user())
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{ url('/home') }}">INÍCIO<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{ url ('/doacoes' )}}">DOAÇÕES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{ url('/info') }}">INFORMAÇÕES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{ url('/classes')}}">CLASSES</a>
                        </li>
                   
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{ url('/downloads')}}">DOWNLOADS</a>
                        </li>
                        @if (Auth::user()->tipo === 99)
                            <li class="nav-item">
                                <a class="nav-link menu" href="{{ url('/admin')}}">ADMINISTRAÇÃO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu" href="{{ url('/cadclass')}}">CADASTRO DE CLASSES</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{ url('/credits')}}">CREDITOS</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{ url('/votar')}}">VOTAR</a>
                        </li>
                    @endif
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a style="" id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                SAIR <span class="caret"></span>
                            </a>
        
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main role="main" class="container-fluid py-4 ff" id="main">   
            @yield('content')    
        </main> 
    </div>

    <script src="{{ asset('/js/jquery-3.5.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset ('/js/popper.min.js')}}"></script>
   
    
</body>

@stack('script')
@if (!Auth::user()){
    <script type="text/javascript">
        $(document).ready(function(){   
            $("#main").addClass("addpaddingtop");
        });
    </script>
@endif
</html>
