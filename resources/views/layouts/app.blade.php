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
</head>
<body>
    <div id="app">
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
                        <li>
                            <a href="{{route('developers.index')}}">Desarrolladores</a>
                        </li> |
                        <li>
                            <a href="{{route('sprints.index')}}">Sprints</a>
                        </li> |
                        <li>
                            <a href="{{route('tasks.index')}}">Tareas</a>
                        </li> |
                        <li>
                            <a href="{{route('product_backlogs.index')}}">Product_Backlogs</a>
                        </li> |
                        <li>
                            <a href="{{route('scrum_teams.index')}}">Scrum_Teams</a>
                        </li> |
                        <li>
                            <a href="{{route('scrum_masters.index')}}">Scrum_Masters</a>
                        </li> |
                        <li>
                            <a href="{{route('companies.index')}}">Compañias</a>
                        </li> |
                        <li>
                            <a href="{{route('product_owners.index')}}">Product_Owners</a>
                        </li> |
                        <li>
                            <a href="{{route('burndown_charts.index')}}">Burndown_Charts</a>
                        </li> |
                    </ul>


                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
