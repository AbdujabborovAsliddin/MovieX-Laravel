<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white font-sans">
    <nav class="fixed w-full z-20 top-0 start-0 bg-gray-900 border-b">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-16 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index')}}">MovieX</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index')}}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 rounded-full w-60 px-4 pl-8 focus:outline-none focus:shadow-outline py-1" placeholder="Search">
                    <div class="absolute top-0"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-4 h-4 mt-2 ml-2 text-gray-500 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                      </svg>
                      </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="s" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    

<footer class="bg-gray-900 rounded-lg shadow  m-4 mt-20">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            {{-- <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul> --}}
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://movieX.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
</footer>


</body>
</html>