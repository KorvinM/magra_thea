<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magrathea</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="//brick.freetls.fastly.net/Raleway:700/Lato:400,700,400i,700i">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">

    </head>
    <body class="antialiased">
	<header class= "flex main-header">
	  <h1 class="">Welcome to Magrathea</h1>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
	  <nav><ul class="flex">
	    <li><a href="/">Home</a></li>
            <li><a href="/planets">Planets</a></li>
            <li><a href="/planets/create">Order a Planet</a></li>

	  </ul></nav>
        </header>
        <main class="relative flex items-top justify-center min-h-screen62 bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

@yield('main')


        </main>
<footer>
	<div class="flex">
				@php
				$today = getdate();
      				echo '<p class="php-output">Today is '. $today['weekday']. '</p>';
				@endphp
<p>	Magrathea welcomes you</p>
                            </div>
</footer>
    </body>
</html>
