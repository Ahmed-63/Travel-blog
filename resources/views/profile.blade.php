@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

<div class="p-5 flex items-center justify-center">
<a class="text-black hover:text-white font-bold text-xl p-5 bg-yellow-100 border-white border-2 hover:bg-black text duration-500 rounded-xl" href="{{ route('posts.create') }}" title="Créer un article" >Créer un nouveau post</a>
</div>


@endsection