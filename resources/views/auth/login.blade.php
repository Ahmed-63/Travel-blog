<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
  </head>
  <body class=" bg-black ">
    <div class=" flex items-center justify-center h-screen ">
      <form class="border-2 p-10 bg-white rounded-xl " method="POST" action="{{ route('login') }}">
          @csrf

          <div class="">
            <div class="flex flex-col items-center justify-center">
                <h1 class="font-bungee font-semibold text-xl">Connexion</h1>
                <img class=" w-20 " src="{{url('/img/logo.png')}}" alt="aa">
            </div>
              <label for="email" class="">{{ ('Mail') }}</label>

              <div class="">
                  <input class="text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" id="email" type="email" class="border-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                      <span class="">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="">
              <label for="password" class="">{{ ('Mot de passe') }}</label>
              <div class="">
                  <input class="text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" id="password" type="password" class="border-2 @error('password') is-invalid @enderror" name="password" required>
                  @error('password')
                      <span class="">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="">
              <div class="flex items-center justify-center mt-5">
                  <button class="text-white text-xl p-5 bg-black border-2 hover:bg-white hover:text-black border-black duration-500 rounded-xl mr-5">
                      {{ ('Connexion') }}
                  </button>
              </div>
          </div>
      </form>
    </div>
  </body>
</html>