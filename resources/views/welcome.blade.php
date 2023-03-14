<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Travel Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="bg-hero bg-cover"> 
        <header class="flex items-center justify-center">
            <div class="inline-flex items-center border border-white p-5 m-5 rounded-xl mr-5 bg-white">
                <img class=" w-40" src="{{url('/img/logo.png')}}" alt="logo">
                <h1 class="text-black text-xl font-bungee font-bold ">TRAVEL BLOG</h1>
            </div>
        </header>    
        <div class=" flex items-center justify-end mt-52 pr-60">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="text-blue-600 text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5">Home</a>
                        <a href="{{ route('logout') }}" class="border-white text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-black hover:text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-black hover:text-white text-xl p-5 bg-yellow-100 border-white border-2 hover:bg-black  duration-500 rounded-xl">Inscription</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>     
    </body>
</html>
