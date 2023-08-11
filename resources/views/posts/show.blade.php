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

@forelse ($post->comments as $comment)

        <div class="card">
            <div class="card-body">
            <div class="font-medium text-base text-gray-800 ml-12">{{ $comment->user->name }}: {{ $comment->content}}
            </div>
        </div>
            @empty
                <div class="alert alert-info ml-12">Aucun commentaire pour cet article</div>
    @endforelse
    <div class="flex justify-center">
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="flex flex-col rounded-lg p-4 wrap">
            @csrf
            <h2> Créer un commentaire</h2>
            <div class="form-group mb-3">
                <textarea placeholder= "écrivez ici....." class="form-control @error('content') is-invalid @enderror h-20" name="content" id="content" rows="5"></textarea>
            </div>
            <button type="submit" class="text-black hover:text-white font-bold text-xl p-3 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl text-center">Commenter</button>
        </form>
    </div>

@endsection