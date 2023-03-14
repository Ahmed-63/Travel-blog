@extends("layouts.app")
@section("title", "Créer un post")
@section("content")

<div class="flex items-center justify-center m-5">
	

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label class="font-bold"  for="title" >Ville</label><br/>
			<input class="text-black hover:text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" type="text" name="title" value="{{ old('title') }}"  id="title" placeholder="La Ville..." >

			<!-- Le message d'erreur pour "title" -->
			@error("title")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label class="font-bold" for="picture" >Photo</label><br/>
			<input class="text-black hover:text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" type="file" name="picture" id="picture" >

			<!-- Le message d'erreur pour "picture" -->
			@error("picture")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label class="font-bold" for="content" >Description</label><br/>
			<textarea class="text-black hover:text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Avis positif et négatif..." >{{ old('content') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("content")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input class="text-black hover:text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5 font-bold" type="submit" name="valider" value="Envoyer" >

	</form>
</div>
@endsection