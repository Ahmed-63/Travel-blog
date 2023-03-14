@extends("layouts.app")
@section("title", $post->title)
@section("content")


<div class="flex items-center justify-center flex-col m-5">
	<h1 class=" font-extrabold text-3xl m-5">{{ $post->title }}</h1>

	<img class="rounded-xl w-72 h-52 m-2 mr-5" src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture" style="max-width: 300px;">

	<div>{{ $post->content }}</div>

	<p ><a class=" text-black hover:text-white font-bold text-xl p-3 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl text-center" href="{{ route('posts.index') }}" title="Retourner aux articles" >Retourner aux posts</a></p>
</div>

{{-- commentaire --}}



@endsection