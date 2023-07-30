<!doctype html>
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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
          min-height: 100vh; /* Set the minimum height of the body to fill the entire viewport */
          display: flex;
          flex-direction: column;
          position: relative;
        }
    
        main {
          flex: 1; /* Allow the main content area to grow and fill the available space */
        }
    
        .footer {
          background-color: #343a40;
          bottom: 0;
          color: #fff;
          padding: 20px 0;
        }

        img {
          width:100%;
          height:auto;
        }
        .categories-bg{
          position: absolute;
          z-index: 1;
          background-color: #eee;
          text-decoration: none;
          color: #333;
        }

        .categories-bg a {
          width: 176px;
          text-decoration: none;
          color: #333;
        }

        .categories-bg a:hover {
          text-decoration: none;
          color: #0d6efd;
        }

        .bg-gray{
            background-color: #eee;
            padding-top: 10px;
        }

        .alert-danger li {
            list-style: none;
        }

        .blog {
            color: #2a9d8f;
        }

        .article-blog + article {
            border-top: 2px solid #ddd;
        }

        a {
            text-decoration: none;
        }

      </style>
</head>
<body>
    <div id="app" class="position-relative">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand blog" href="{{ url('/home') }}">
                    Home
                </a>
                <a class="navbar-brand blog" href="{{ url('/posts') }}">
                    Posts
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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
