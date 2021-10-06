<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fabric managmnet') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        .orbit-spinner, .orbit-spinner * {
      box-sizing: border-box;
    }

    .orbit-spinner {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        perspective: 800px;
        position: absolute;
        left: 50%;
        top: 50%;
    }

    .orbit-spinner .orbit {
      position: absolute;
      box-sizing: border-box;
      width: 100%;
      height: 100%;
      border-radius: 50%;
    }

    .orbit-spinner .orbit:nth-child(1) {
      left: 0%;
      top: 0%;
      animation: orbit-spinner-orbit-one-animation 1200ms linear infinite;
      border-bottom: 3px solid #ff1d5e;
    }

    .orbit-spinner .orbit:nth-child(2) {
      right: 0%;
      top: 0%;
      animation: orbit-spinner-orbit-two-animation 1200ms linear infinite;
      border-right: 3px solid #ff1d5e;
    }

    .orbit-spinner .orbit:nth-child(3) {
      right: 0%;
      bottom: 0%;
      animation: orbit-spinner-orbit-three-animation 1200ms linear infinite;
      border-top: 3px solid #ff1d5e;
    }

    @keyframes orbit-spinner-orbit-one-animation {
      0% {
        transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
      }
      100% {
        transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
      }
    }

    @keyframes orbit-spinner-orbit-two-animation {
      0% {
        transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
      }
      100% {
        transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
      }
    }

    @keyframes orbit-spinner-orbit-three-animation {
      0% {
        transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
      }
      100% {
        transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
      }
    }
    </style>
</head>
<body>
    <div id="app">
        <div class="orbit-spinner">
            <div class="orbit"></div>
            <div class="orbit"></div>
            <div class="orbit"></div>
        </div>
    <main>
<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <svg id="Capa_1" enable-background="new 0 0 511.99 511.99" height="64" viewBox="0 0 511.99 511.99" width="120" xmlns="http://www.w3.org/2000/svg"><g><g>

                        <path d="m127.257 276.731v17.688c0 6.763 5.533 12.297 12.297 12.297h30.058c6.763 0 12.297-5.533 12.297-12.297v-17.688z" fill="#f4dd45"/>
                        <path d="m410.783 23.038h-28.391c-5.774 0-10.499 4.691-10.499 10.426v48.317c0 5.734 4.725 10.426 10.499 10.426h28.391c5.774 0 10.499-4.692 10.499-10.426v-48.317c0-5.734-4.724-10.426-10.499-10.426z" fill="#f87c68"/>
                        <path d="m396.588 81.781v-48.317c0-5.734 4.725-10.426 10.499-10.426h-24.694c-5.774 0-10.499 4.691-10.499 10.426v48.318c0 5.734 4.725 10.426 10.499 10.426h24.694c-5.775-.001-10.499-4.693-10.499-10.427z" fill="#ec625e"/>
                        <path d="m407.091 92.207h-244.195c-39.191 0-70.962 31.771-70.962 70.962v94.802c0 12.018 9.742 21.76 21.76 21.76h81.777c12.018 0 21.76-9.742 21.76-21.76v-21.534c0-10.456 8.476-18.932 18.932-18.932h97.66c10.456 0 18.932 8.476 18.932 18.932v128.272h125.297v-201.54c.001-39.191-31.77-70.962-70.961-70.962z" fill="#7fb3fa"/>
                        <g fill="#64a6f4">
                            <path d="m127.257 257.971v-94.802c0-39.191 31.771-70.962 70.962-70.962h-35.323c-39.191 0-70.962 31.771-70.962 70.962v94.802c0 12.018 9.742 21.76 21.76 21.76h35.323c-12.017 0-21.76-9.742-21.76-21.76z"/>
                            <path d="m369.147 217.505h-35.323c10.456 0 18.932 8.476 18.932 18.932v128.272h35.323v-128.273c0-10.455-8.477-18.931-18.932-18.931z"/>
                            <path d="m142.372 242.158c6.744 0 12.211-5.467 12.211-12.211v-78.903c0-6.744-5.467-12.211-12.211-12.211h-46.153c-2.771 7.591-4.285 15.787-4.285 24.337v78.989h50.438z"/>
                        </g>
                        <path d="m127.257 163.169c0-8.55 1.514-16.746 4.285-24.337h-35.323c-2.915 8.103-4.283 16.361-4.285 24.318v.019 78.989h35.323z" fill="#3d8bd8"/>
                        <circle cx="438.918" cy="217.128" fill="#477b9e" r="55.651"/>
                        <path d="m415.933 217.128c0-25.051 16.554-46.231 39.318-53.21-5.166-1.584-10.649-2.441-16.333-2.441-30.735 0-55.651 24.916-55.651 55.651s24.916 55.651 55.651 55.651c5.684 0 11.168-.857 16.333-2.441-22.764-6.979-39.318-28.159-39.318-53.21z" fill="#3f6d8e"/>
                        <circle cx="438.918" cy="217.128" fill="#3f6d8e" r="26.313"/>
                        <path d="m438.918 217.128c0-9.738 5.294-18.234 13.157-22.784-3.871-2.24-8.362-3.529-13.157-3.529-14.532 0-26.313 11.781-26.313 26.313s11.781 26.313 26.313 26.313c4.795 0 9.285-1.289 13.157-3.529-7.863-4.55-13.157-13.046-13.157-22.784z" fill="#365e7d"/>
                        <path d="m198.453 361.709h279.6v101.607h-279.6z" fill="#b5dcff"/>
                        <path d="m68.774 361.709h-17.944c-8.725 0-15.798 7.156-15.798 15.984v85.623h33.742z" fill="#8bcaff"/>
                        <path d="m68.774 493.983v-31.852h-40.453c-6.2 0-11.272 5.072-11.272 11.272v19.47c0 6.2 5.072 11.272 11.272 11.272h50.615c-5.612 0-10.162-4.55-10.162-10.162z" fill="#dbedff"/>
                        <path d="m483.297 462.131h-284.844v31.852c0 5.612-4.55 10.162-10.162 10.162h295.006c6.2 0 11.272-5.072 11.272-11.272v-19.47c0-6.2-5.073-11.272-11.272-11.272z" fill="#dbedff"/>

                        <path d="m68.774 493.983v-10.845h-40.453c-5.94 0-10.833-4.66-11.232-10.503-.018.255-.04.509-.04.769v19.47c0 6.2 5.073 11.272 11.272 11.272h50.615c-5.612-.001-10.162-4.551-10.162-10.163z" fill="#b5dcff"/>
                        <path d="m483.297 483.138h-284.844v10.845c0 5.612-4.55 10.162-10.162 10.162h295.006c6.199 0 11.272-5.072 11.272-11.272v-19.47c0-.259-.022-.513-.039-.769-.4 5.844-5.293 10.504-11.233 10.504z" fill="#b5dcff"/>
                        <path d="m194.291 351.12h-118.355c-5.612 0-10.162 4.549-10.162 10.162v132.701c0 5.612 4.55 10.162 10.162 10.162h118.355c5.612 0 10.162-4.55 10.162-10.162v-132.702c0-5.612-4.55-10.161-10.162-10.161z" fill="#f87c68"/>
                        <path d="m104.357 493.983v-132.702c0-5.612 4.55-10.162 10.162-10.162h-38.583c-5.612 0-10.162 4.549-10.162 10.162v132.701c0 5.612 4.55 10.162 10.162 10.162h38.583c-5.612.001-10.162-4.549-10.162-10.161z" fill="#ec625e"/></g><g>
                        <path d="m154.77 389.149c4.143 0 7.5-3.357 7.5-7.5v-6.736c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v6.736c0 4.143 3.357 7.5 7.5 7.5z"/>
                        <path d="m154.77 421.232c4.143 0 7.5-3.357 7.5-7.5v-6.736c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v6.736c0 4.143 3.357 7.5 7.5 7.5z"/>
                        <path d="m154.77 453.315c4.143 0 7.5-3.357 7.5-7.5v-6.736c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v6.736c0 4.143 3.357 7.5 7.5 7.5z"/>
                        <path d="m154.77 485.397c4.143 0 7.5-3.357 7.5-7.5v-6.736c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v6.736c0 4.143 3.357 7.5 7.5 7.5z"/>
                        <path d="m191.83 131.677c-4.143 0-7.5 3.357-7.5 7.5v15.884c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-15.884c0-4.143-3.357-7.5-7.5-7.5z"/>
                        <path d="m216.807 131.677c-4.143 0-7.5 3.357-7.5 7.5v15.884c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-15.884c0-4.143-3.358-7.5-7.5-7.5z"/>
                        <path d="m241.783 131.677c-4.143 0-7.5 3.357-7.5 7.5v15.884c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-15.884c0-4.143-3.357-7.5-7.5-7.5z"/>
                        <path d="m266.76 131.677c-4.143 0-7.5 3.357-7.5 7.5v15.884c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-15.884c0-4.143-3.358-7.5-7.5-7.5z"/>
                        <path d="m439.104 183.66c-18.645 0-33.813 15.169-33.813 33.813s15.169 33.813 33.813 33.813 33.813-15.169 33.813-33.813-15.169-33.813-33.813-33.813zm0 52.627c-10.374 0-18.813-8.439-18.813-18.813s8.439-18.813 18.813-18.813 18.813 8.439 18.813 18.813-8.439 18.813-18.813 18.813z"/>
                        <path d="m478.239 403.732c4.143 0 7.5-3.357 7.5-7.5 0-6.388 0-129.343 0-136.225 10.253-11.231 16.516-26.164 16.516-42.534s-6.263-31.302-16.516-42.534v-11.426c0-36.087-24.497-66.543-57.729-75.661.612-1.801.958-3.722.958-5.726v-48.316c0-9.885-8.074-17.926-17.999-17.926h-6.695v-8.384c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v8.384h-6.695c-9.925 0-17.999 8.041-17.999 17.926v23.917h-202.31v-3.346c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v3.346h-.271c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h.271v13.927c-35.757 7.346-62.649 39.071-62.649 76.86v94.802c0 16.135 13.126 29.261 29.261 29.261h6.062v7.188c0 10.916 8.881 19.797 19.797 19.797h7.529v7.202h-4.114c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h4.114v7.202h-71.148c-7.224 0-13.44 4.363-16.173 10.589h-8.932c-12.847 0-23.298 10.451-23.298 23.298v77.165c-9.984.418-17.983 8.647-17.983 18.732v19.47c0 10.352 8.421 18.772 18.771 18.772h454.977c10.351 0 18.771-8.421 18.771-18.772v-19.47c0-9.586-7.227-17.503-16.516-18.622v-23.893c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v23.744h-258.6v-85.423h258.601v26.679c-.001 4.14 3.357 7.497 7.499 7.497zm-39.135-138.108c-26.55 0-48.15-21.601-48.15-48.15 0-26.551 21.601-48.151 48.15-48.151 26.592 0 48.151 21.643 48.151 48.151 0 26.647-21.703 48.15-48.151 48.15zm-59.524-231.814c0-1.586 1.373-2.926 2.999-2.926h28.391c1.626 0 2.999 1.34 2.999 2.926v48.317c0 1.585-1.373 2.925-2.999 2.925-16.21 0-12.18 0-28.391 0-1.626 0-2.999-1.34-2.999-2.925zm-217.31 38.917h202.31v9.4c0 .998.103 1.971.261 2.925h-201.759c-.272 0-.541.018-.812.021zm-60.365 73.95h40.653c2.599 0 4.712 2.113 4.712 4.712v78.903c0 2.598-2.113 4.711-4.712 4.711h-42.938v-71.489c0-5.433.683-11.018 2.285-16.837zm33.038 148.087v-7.188h39.651v7.188c0 2.601-2.196 4.797-4.796 4.797h-30.058c-2.6 0-4.797-2.197-4.797-4.797zm-92.224 83.088c0-4.575 3.723-8.298 8.298-8.298h7.443v85.423h-15.741zm-14.212 119.138c-2.044 0-3.771-1.728-3.771-3.772v-19.47c0-2.044 1.728-3.771 3.771-3.771h6.712 23.241v24.352c0 .548.033 1.087.082 1.623.014.157.034.312.053.468.023.19.036.383.065.571h-30.153zm44.953-2.662c0-3.307 0-131.678 0-132.274v-.427c0-1.468 1.194-2.662 2.662-2.662h118.355c1.468 0 2.661 1.194 2.661 2.662v.427 132.274c0 1.468-1.193 2.662-2.661 2.662h-118.355c-1.468 0-2.662-1.194-2.662-2.662zm410.023-24.351c2.044 0 3.771 1.728 3.771 3.771v19.47c0 2.045-1.728 3.772-3.771 3.772h-271.545c.029-.188.042-.381.065-.571.019-.156.039-.311.053-.468.049-.535.082-1.075.082-1.623v-24.352c14.933.001 256.087.001 271.345.001zm-123.042-115.423v-117.773c0-14.574-11.857-26.432-26.432-26.432h-31.33c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h31.33c6.304 0 11.432 5.128 11.432 11.432v117.772h-134.791c-2.734-6.226-8.949-10.589-16.172-10.589h-32.208v-7.202h4.113c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-4.113v-7.202h7.529c10.915 0 19.796-8.881 19.796-19.797v-7.188h6.062c16.135 0 29.261-13.126 29.261-29.261v-21.534c0-6.304 5.128-11.432 11.432-11.432h31.33c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-31.33c-14.574 0-26.432 11.857-26.432 26.432v21.534c0 7.863-6.397 14.261-14.261 14.261h-13.562-54.651-13.562c-7.863 0-14.261-6.397-14.261-14.261v-8.312h42.938c10.869 0 19.712-8.843 19.712-19.711v-78.903c0-10.869-8.843-19.712-19.712-19.712h-34.339c11.005-18.891 31.469-31.625 54.863-31.625h244.195c34.752 0 63.069 28.079 63.458 62.74-9.902-5.75-20.882-8.47-31.632-8.47-34.821 0-63.15 28.33-63.15 63.151s28.329 63.15 63.15 63.15c11.052 0 21.987-2.868 31.636-8.473v82.402h-110.299z"/></g></g>
                    </svg>
                </a>
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
</nav><!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tachometer fa-fw mr-3"></span>
                    <span class="menu-collapsed">Category</span>
                    <span class="ml-auto fa fa-caret-down"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="{{ route('category_create') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Create new Category</span>
                </a>
                <a href="{{ route('category') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">All Categories</span>
                </a>
                <a href="{{ route('category_create') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">***</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Employers</span>
                    <span class="ml-auto fa fa-caret-down"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="{{ route('employer') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">All employers</span>
                </a>
                <a href="{{ route('employer_create') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Add new employer</span>
                </a>
            </div>

            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-database fa-fw mr-3"></span>
                    <span class="menu-collapsed">Resources</span>
                    <span class="ml-auto fa fa-caret-down"></span>
                </div>
            </a>

            <!-- Submenu content -->
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href="{{ route('resources_create') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Create new resource</span>
                </a>
                <a href="{{ route('resources') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">All resources</span>
                </a>
                <a href="{{ route('download_resource') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Download all resources</span>
                </a>
            </div>

            <a href="{{ route('supplier') }}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Suppliers</span>
                </div>
            </a>

            <a href="{{ route('job') }}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Jobs</span>
                </div>
            </a>

            <a href="{{ route('location') }}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-map-marker-alt fa-fw mr-3"></span>
                    <span class="menu-collapsed">Location</span>
                </div>
            </a>

            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Calendar</span>
                </div>
            </a>
            <a href="{{route('order')}}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Orders <span class="badge badge-pill badge-primary ml-2" id="order_counts"></span></span>
                </div>
            </a>

            <a href="{{route('manager')}}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Managers <span class="badge badge-pill badge-primary ml-2" id="order_counts"></span></span>
                </div>
            </a>

            <a href="{{route('customer')}}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Customer <span class="badge badge-pill badge-primary ml-2" id="order_counts"></span></span>
                </div>
            </a>

            <a href="{{route('sales')}}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-comment-dollar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Sales <span class="badge badge-pill badge-primary ml-2" id="order_counts"></span></span>
                </div>
            </a>

            <a href="{{route('clothes')}}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tshirt fa-fw mr-3"></span>
                    <span class="menu-collapsed">Clothes <span class="badge badge-pill badge-primary ml-2" id="order_counts"></span></span>
                </div>
            </a>

            <a href="{{route('report')}}" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-file fa-fw mr-3"></span>
                    <span class="menu-collapsed">Report <span class="badge badge-pill badge-primary ml-2" id="order_counts"></span></span>
                </div>
            </a>
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed"></li>
            <!-- /END Separator -->

            <a href="#top" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
    <!-- MAIN -->

    @yield('content')
</div><!-- body-row END -->
</main>


</div>

{{-- <input type="hidden" name="order_count" class="order_count_badge" value="{{ $count }}"> --}}

    <script>

        // Hide submenus
    $('#body-row .collapse').collapse('hide');

    // Collapse/Expand icon
    $('#collapse-icon').addClass('fa-angle-double-left');

    // Collapse click
    $('[data-toggle=sidebar-colapse]').click(function() {
        SidebarCollapse();
    });

    function SidebarCollapse () {
        $('.menu-collapsed').toggleClass('d-none');
        $('.sidebar-submenu').toggleClass('d-none');
        $('.submenu-icon').toggleClass('d-none');
        $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

        // Treating d-flex/d-none on separators with title
        var SeparatorTitle = $('.sidebar-separator-title');
        if ( SeparatorTitle.hasClass('d-flex') ) {
            SeparatorTitle.removeClass('d-flex');
        } else {
            SeparatorTitle.addClass('d-flex');
        }

        // Collapse/Expand icon
        $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
    }
    </script>
    <style>
        #body-row {
        margin-left:0;
        margin-right:0;
    }
    #sidebar-container {
        min-height: 100vh;
        background-color: #333;
        padding: 0;
    }

    /* Sidebar sizes when expanded and expanded */
    .sidebar-expanded {
        width: 230px;
    }
    .sidebar-collapsed {
        width: 60px;
    }

    /* Menu item*/
    #sidebar-container .list-group a {
        height: 50px;
        color: white;
    }

    /* Submenu item*/
    #sidebar-container .list-group .sidebar-submenu a {
        height: 45px;
        padding-left: 30px;
    }
    .sidebar-submenu {
        font-size: 0.9rem;
    }

    /* Separators */
    .sidebar-separator-title {
        background-color: #333;
        height: 35px;
    }
    .sidebar-separator {
        background-color: #333;
        height: 25px;
    }
    .logo-separator {
        background-color: #333;
        height: 60px;
    }

    /* Closed submenu icon */
    #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
      content: " \f0d7";
      font-family: FontAwesome;
      display: inline;
      text-align: right;
      padding-left: 10px;
    }
    /* Opened submenu icon */
    #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
      content: " \f0da";
      font-family: FontAwesome;
      display: inline;
      text-align: right;
      padding-left: 10px;
    }
    </style>
<script>
    jQuery(".orbit-spinner").show();
   setTimeout(function ()
   {
      jQuery('.orbit-spinner').hide();
   }, 500);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
