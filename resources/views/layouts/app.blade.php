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
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
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
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            @if (Auth::guest())
            @else
                <div class="text-center" style="padding: 5px;">
                    <a href="https://adclick.g.doubleclick.net/pcs/click?xai=AKAOjss51d2XQ0e37iNmqZxokwVtA_9E5_-DdOiMKrX5jQG3g4xXW0NtCrmNqeu5PCckke3jQt6oL8A_ByuBKpm_QpowNS1jeu34v3IhhGCw-0fsm5KFfsNTcH5-4MKNCEp-OBHrFkLIhhU7rhnm1XmATClyBtOkTZYxHKtbfFjG1waGT6Jrat6kHMiTjXqpVIA84SztbSeCGyi2vTfBKpPNRNj3pEjyLrVwV5c&amp;sig=Cg0ArKJSzOPZ34mvgOibEAE&amp;urlfix=1&amp;adurl=https://www.w3schools.com/howto/howto_css_alert_buttons.asp" target="_blank&quot;">
                        <button class="btn success">Profile</button>
                        <button class="btn info">Info</button>
                        <button class="btn warning">Warning</button>
                        <button class="btn danger">Danger</button>
                        <button class="btn default">Default</button>
                    </a>
                </div>
            @endif
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/public/js/app.js"></script>
</body>
</html>
