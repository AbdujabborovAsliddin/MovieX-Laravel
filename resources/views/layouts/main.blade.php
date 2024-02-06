<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>movieX</title>
    @livewireStyles
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white font-sans font-semibold">
    <nav class="fixed w-full z-20 top-0 start-0 bg-gray-900 border-b">
        
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-16 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="/" class="px-2 py-2 border bg-gray-950 text-lg">Movie<span class="text-orange-400 font-bold">X</span></a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index')}}" class="hover:text-gray-300 text-lg">Movies</a>
                </li>
                
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index')}}" class="hover:text-gray-300 text-lg">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
                <a class="ml-3 border-none p-1 bg-orange-500 border rounded-full" href="{{ route('register') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-7 h-7">
                    <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                  </svg>
                  </a>
            </div>
           
        </div>
    </nav>
    @yield('content')
    

<footer class="bg-gray-900  shadow  mt-28 border-t-2 border-gray-700">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8 justify-center items-center">
        
        <div>
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">abdujabborov.uz™</a>. Only For Educational Purpose</span>
        </div>
        <div class="flex justify-center mx-auto items-center mt-1">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">Thanks to TMDB Group For Free API </span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="block w-5 h-5 text-orange-500 ml-1">
                <path d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z" />
              </svg>
              
        </div>
        
        
    </div>
</footer>

@livewireScripts
</body>
</html>