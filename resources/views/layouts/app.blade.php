<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="/public/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>
                    @if (Auth::guest())
                    @else
                        @if (Auth::user()->role->name === 'leaner')
                            <span class="label label-info">Leaner</span>
                        @endif
                        @if (Auth::user()->role->name === 'teacher')
                            <span class="label label-info">Teacher</span>
                        @endif
                        @if (Auth::user()->role->name === 'director')
                            <span class="label label-info">Director</span>
                        @endif
                    @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">@lang('menu.login')</a></li>
                            <li><a href="{{ url('/register') }}">@lang('menu.register')</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            @lang('menu.logout')
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <a class="btn btn-default" href="{{ url('/lang/en') }}">
                                ENG
                            </a>
                            <a class="btn btn-default" href="{{ url('/lang/ua') }}">
                                UA
                            </a>
                        @endif
                    </ul>
                </div>
            </div>
            @if (Auth::guest())
            @else
                <div class="text-center" style="padding: 5px;">
                        <a class="btn btn-default" href="{{ url('/profile') }}">@lang('menu.profile')</a>
                        @if (Auth::user()->role->name === 'leaner')
                            <a class="btn btn-default">@lang('menu.diary')</a>
                        @endif
                        @if (Auth::user()->role->name === 'teacher')
                            <a class="btn btn-default">@lang('menu.distance')</a>
                            <a class="btn btn-default">@lang('menu.ratings')</a>
                            <a class="btn btn-default">@lang('menu.groups')</a>
                        @endif
                        @if (Auth::user()->role->name === 'director')
                            <a class="btn btn-default">@lang('menu.teachers')</a>
                            <a class="btn btn-default">@lang('menu.subjects')</a>
                            <a class="btn btn-default" href="{{ url('/roles') }}">@lang(('menu.roles'))</a>
                        @endif
                </div>
            @endif
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/public/js/app.js"></script>
</body>
</html>
