<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-black">
        <div class="flex items-center justify-center h-screen ">
            <form class="border-2 p-10 rounded-xl bg-white" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="font-bungee font-semibold text-xl">Inscription</h1>
                        <img class=" w-20 " src="{{url('/img/logo.png')}}" alt="aa">
                    </div>
                    <label for="name" class="">{{ ('Pseudo') }}</label>

                    <div class="flex flex-col">
                        <input class="w-full text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" id="name" type="text" class="border-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>

                        @error('name')
                            <span class="text-red-500 text-xs">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="email" class="">{{ ('Email') }}</label>

                    <div class="flex flex-col">
                        <input class="w-full text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                        @error('email')
                            <span class="text-red-500 text-xs">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="">
                    <label for="password" class="">{{ ('Mot de passe') }}</label>

                    <div class="flex flex-col">
                        <input class="w-full text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required>

                        @error('password')
                            <span class="text-red-500 text-xs">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="password-confirm" class="">{{ ('Confirmer le mot de passe') }}</label>

                    <div class="">
                        <input class="w-full text-white text-xl p-5 bg-blue-100 border-white border-2 hover:bg-black duration-500 rounded-xl mr-5" id="password-confirm" type="password" class="" name="password_confirmation" required>
                    </div>
                </div>

                <div class="">
                    <div class="flex items-center justify-center mt-5">
                        <button  type="submit" class="text-white text-xl p-5 bg-black border-2 hover:bg-white hover:text-black border-black duration-500 rounded-xl mr-5">
                            {{ __('Enregistré') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
