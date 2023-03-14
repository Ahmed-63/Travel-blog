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
		<title>@yield("title")</title>
    </head>
	
<body>
	<header>
		<nav class="bg-nav bg-cover bg- flex justify-between items-center">
			<img class=" w-20 ml-5" src="{{url('/img/logo.png')}}" alt="logo">
			<ol class="flex justify-end m-5 space-x-5 text-white">
				<li><a  class="text-xl p-5 hover:text-orange-300 hover:underline duration-500 mr-5" href="{{ url('/home') }}"> Accueil</a></li>
				<li><a  class="text-xl p-5 hover:text-orange-300 hover:underline duration-500 mr-5" href="{{ url('/posts') }}"> Article</a></li>
				<li><a  class="text-xl p-5 hover:text-orange-300 hover:underline duration-500 mr-5" href="{{ url('/profile') }}"> Profile</a></li>
				<li><a href="{{ route('logout') }}" class="text-red-500 text-xs mr-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					Déconnexion
				</a><form id="logout-form" action="{{ route('logout') }}" method="POST">
					@csrf
				</form></li>
			</ol>
		</nav>
   </header>
	<!-- Le contenu -->
	@yield("content")
	<footer>
    
	</footer>
</body>
</html>