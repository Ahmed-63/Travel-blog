@extends("layouts.app")
@section("title", "Accueil")
@section("content")

    <body class=" bg-white h-full"> 
       
       <main class="flex justify-center align-center">
        <div class="border w-96 p-10 rounded-xl mt-14">
            <img class=" w-96 rounded-xl" src="{{url('/img/login.jpg')}}" alt="logo">
            <p class="text-black text-justify font-bold text-lg mt-5">Bienvenue sur le blog voyage TravelBlog. Retrouve sur ce blog voyage tous nos articles de blog voyage en France, en Europe et tout autour du monde entre city guides, itinéraires et road trips en pleine nature. De vrais guides alternatifs pour bien voyager !  </p>
        </div>
       </main>

    </body>
</html>
@endsection
