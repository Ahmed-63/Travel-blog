@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

	
	
	<h1 class="flex justify-center font-extrabold text-3xl m-5">Les articles de blog voyage les plus récents</h1>
	<div class="flex flex-row flex-wrap">
        @foreach ($posts as $post)
        <div class="flex flex-col">
            <a href="{{ route('posts.show', $post) }}" title="Lire l'article" class="inline"><img class="rounded-xl w-72 h-52 m-2 mr-5" src="{{ asset('storage/'.$post->picture) }}"></a>
            <a href="{{ route('posts.show', $post) }}" title="Lire l'article" class="inline font-bold text-center text-2xl mr-5 ">{{ $post->title }}</a>
            <a class="text-black hover:text-white text-xl p-3 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5 text-center w-full" name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" href="{{ route('posts.edit', $post) }}" title="Modifier l'article" >Modifier</a>
            <form method="POST" action="{{ route('posts.destroy', $post) }}" >
            @csrf
            @method("DELETE")
            <input class="text-black hover:text-white text-xl p-2  bg-red-500 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5 w-full" name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" type="submit" value="Supprimer" >
        </div>
        
        @endforeach
    </div>


@endsection

