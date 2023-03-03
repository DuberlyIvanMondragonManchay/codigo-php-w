<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="favicon.ico">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="navbar-top-fixed.css" rel="stylesheet">
        <link rel="stylesheet" href="snackbarjs/dist/snackbar.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


        @livewireStyles
        @stack('styles')

        <!-- Styles tailwindCss -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="navbar.css" rel="stylesheet">


        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- <link rel="stylesheet" href="http://localhost:8000/css/style.css"> -->
        <!-- <link rel="stylesheet" href="http://localhost:8000/css/avisos.css"> -->

        <link rel="stylesheet" href="{{ config('app.url_port') . '/css/style.css' }}">
        <link rel="stylesheet" href="{{ config('app.url_port') . '/css/avisos.css' }}">
        
        <link rel="stylesheet" href="{{ config('app.url_port') . '/css/programadorfull.css' }}">
        

<!--     <style>
        .nunito {
            font-family: 'nunito', font-sans;
        }
        
        .border-b-1 {
            border-bottom-width: 1px;
        }
        
        .border-l-1 {
            border-left-width: 1px;
        }
        
        hover\:border-none:hover {
            border-style: none;
        }
        
        #sidebar {
            transition: ease-in-out all .3s;
            z-index: 9999;
        }
        
        #sidebar span {
            opacity: 0;
            position: absolute;
            transition: ease-in-out all .1s;
        }
        
        #sidebar:hover {
            width: 150px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            /*shadow-2xl*/
        }
        
        #sidebar:hover span {
            opacity: 1;
        }
    </style> -->
        

    </head>

    <!-- <body style="background-color: #F8F8F8;"> -->
    <body style="background-color: #339698;">

<!--         <div>
            <button class="bg-gradient-wortika text-3xl text-white rounded-xl p-4 m-1">hanntronico</button>
        </div> -->


<!--         <ul class="list-none flex">
            <li class="mr-6">
                <a class="text-blue-ligth bg-login-empresa hover:text-blue-700" href="#">active</a>
            </li>
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-700" href="#">link</a>
            </li>
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-700" href="#">link</a>
            </li>
            <li class="mr-6">
                <a class="text-gray-300 hover:text-blue-700" href="#">Desabled</a>
            </li>
        </ul> -->

        <div id="app">

         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <!-- hanntronico -->
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

@guest




@else

               <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-4 p-3 d-none">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src={{ asset('img/logo-verde.svg') }} class="h-6" alt="logo-wortika">
                        <!-- <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow"> -->
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        <!-- <img src={{ asset('img/logo-verde.svg') }} class="w-2/6 mb-10" alt="logo-wortika"> -->
                    </a>

                    <div class="relative mt-1 rounded ml-5">
                        <input placeholder="Buscar empleo" class="bg-gray-100 border-0 rounded-3xl py-2 px-4 w-full focus: border-gray-400 focus: outline-none text-gray-500">
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <a href="#" title="buscar"> <i class="fa fa-search h-4 w-4 mx-3 text-blue-ligth"></i> </a>
                        </div>
                    </div>

                    <!-- <input type="text" name="" value=""  class="bg-gray-100 rounded-3xl py-2 px-4 ml-5 w-60 text-sm " placeholder="Buscar empleo"> -->

                    <button class="navbar-toggler bg-gray-400" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle rounded-3xl" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <span style="margin-right: 15px; font-weight: bolder; ">Publicar empleo</span>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

@endguest


        <main>
            @yield('content')
        <main>
      



        </div>
        




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>





        @livewireScripts
        @stack('scripts')



    </body>
</html>
