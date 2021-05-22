<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fundation</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        
    </head>
                    
        <body class="overflow-x-hidden antialiased w-full">
            
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="bg-gradient-to-br from-indigo-900 to-green-900 min-h-screen overflow-auto">
                <div class="container max-w-5xl mx-auto px-4">
                  <div class="w-4/5">
                    <h1 class="mt-32 text-white text-6xl font-bold">The fastest, most secure dev environment <br /><span class="text-blue-400">on the planet.</span></h1>
                  </div>
                  <div class="w-5/6 my-10 ml-6">
                    <h3 class="text-gray-300">
                      Create, edit & deploy fullstack apps with <br />
                      <strong class="text-white">faster package installations & greater security</strong>
                      <br />than even local environments.
                    </h3>
                  </div>
                </div>
            </div>
        
    </body>
</html>
