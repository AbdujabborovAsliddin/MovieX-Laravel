@extends('layouts.main')

@section('content')

    <div class="movie-info border-b border-gray-800 mt-16">
        <div class="container mx-auto md:px-16 py-16 flex flex-col md:flex-row">
            <div class="w-1/3">
                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="a" class="w-64 mx-auto mt-56 md:mt-0 md:w-96 flex">
            </div>
            
            <div class="ml-10 md:ml-20 w-2/3">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                        <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                          </svg>
                          </span>
                        <span class="ml-1">{{ $movie['vote_average'] }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ $movie['release_date'] }}</span>
                        <span class="mx-2">|</span>
                        <span> @forelse ($movie['genres'] as $genre)
                            {{ $genre['name'] }}@if(!$loop->last),@endif
                        @empty
                            Unknown
                        @endforelse
                        </span>
                    </div>
                
                <p class="text-gray-300 mt-8">{{ $movie['overview'] }}</p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4 gap-3">
                        
                        
                            @forelse ($movie['credits']['crew'] as $crew)
                            @if ($loop->index<2)
                            <div>
                            <div class="mr-8">
                                <div>{{ $crew['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                            </div>
                            </div>
                            @endif
                            @empty
                                Undefined
                            @endforelse
                    </div>
                </div>
                @if (count($movie['videos']['results'])>0)
                <div class="mt-12">
                    <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" target="_blank" class=" inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-4 py-3 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                          </svg>
                        <span class="ml-2">Play Trailer</span>      
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>






    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-16 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mt-10">
                @forelse ($movie['credits']['cast'] as $cast)
                @if($loop->index<5)
                <div class="mt-6">
                    <a href="{{ route('actors.show', $cast['id']) }}">
                        
                        @if ($cast['profile_path'])
                        <img src="{{ 'https://image.tmdb.org/t/p/w500'.$cast['profile_path'] }}" alt="a" class="hover:opacity-75 transition easy-in-out duration-150">
                            @else
                                <img src="https://via.placeholder.com/204x307" alt="poster" class="">
                            @endif
                    </a>
                    <div class="mt-2">
                        <a href="{{ route('actors.show', $cast['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                        
                        <div class="text-gray-400 text-sm">
                            {{ $cast['character'] }}
                        </div>
                    </div>
                </div>
                @endif
                @empty
                
                    Undefined =( 
                @endforelse
                

                
                
            </div>
        </div>
    </div>

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-16 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-8 mt-16">
                @forelse ($movie['images']['backdrops'] as $image)
                    @if ($loop->index<9)
                    <a>
                        <img src="{{ 'https://image.tmdb.org/t/p/w500'.$image['file_path'] }}" alt="a">
                    </a>
                    @endif
                @empty
                    undefined
                @endforelse
                
            </div>
        </div>
    </div>
@endsection