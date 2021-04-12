<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Blog')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css" />
     <link rel="icon" type="icon" href="{{ asset('/img/fav.png')}}">
    @livewireStyles
</head>
<body>
<x-header></x-header>
    @if(!Route::is('post/create'))
    <div class="container mx-auto p-2">
        <h1 class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Welcome to The Sample Blog
        </h1>
    </div>
    @endif

    @yield('content')

    @livewireScripts
</body>
</html>