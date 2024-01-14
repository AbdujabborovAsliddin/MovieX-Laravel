@extends('layouts.main')

@section('content')

<div class=" border-b border-gray-800 mt-16">
    <div class="container mx-auto md:px-16 py-16 flex flex-col md:flex-row">
        <div class="w-1/3">
            @if ($actor['profile_path'])
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$actor['profile_path'] }}" alt="a" class="w-92 hover:opacity-75 transition easy-in-out duration-150 w-64 mx-auto mt-56 md:mt-0 md:w-96 flex">
                        @else
                            <img src="https://via.placeholder.com/50x75" alt="poster" class="w-80 hover:opacity-75 transition easy-in-out duration-150">
                        @endif
        </div>
        
        <div class="ml-10 md:ml-20 w-2/3">
            <h2 class="text-4xl font-semibold">{{ $actor['name'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                    <span>
                      </span>
                     <span class="ml-1">{{ $actor['birthday'] }}</span>
                    
                </div>
            
            <div class="">
            @if ($actor['biography'])
                <p class="text-gray-300 mt-8">{{ $actor['biography'] }}</p></div>
            @else
                <p class="text-red-300 mt-8">Sorry, Information About {{ $actor['name'] }} Not Found From API  :(</p></div>
            @endif
        </div>
    </div>
</div>

<div class="movie-cast border-gray-800 mt-10">
    <div class="container mx-auto px-16 py-16">
        <h2 class="text-3xl font-semibold">Casts With <span class="underline text-gray-400">{{ $actor['name'] }}</span></h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mt-10">
            @forelse ($actor['credits']['cast'] as $cast)
            @if($loop->index<5)
            <div class="mt-6">
                <a href="{{ route('movies.show', $cast['id']) }}" class="">
                    @if ($cast['poster_path'])
                    <img src="{{ 'https://image.tmdb.org/t/p/w500'.$cast['poster_path'] }}" alt="a" class="h-80 hover:opacity-75 transition easy-in-out duration-150">
                        @else
                            <img src="https://via.placeholder.com/204x307" alt="poster" class="">
                        @endif
                </a>
                <div class="mt-2">
                    <a href="{{ route('movies.show', $cast['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $cast['title'] }}</a>
                    
                </div>
            </div>
            @endif
            @empty
            
                Undefined =( 
            @endforelse
            

            
            
        </div>
    </div>
</div>

@endsection
                        