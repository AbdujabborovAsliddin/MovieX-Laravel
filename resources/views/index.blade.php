@extends('layouts.main')

@section('content')
    <div class="font-sans container mx-auto pt-16 md:px-16 ">
        <div class="popular-movies mt-14">
            <h2 class="uppercase tracking-winder text-orange-500 text-lg font-semibold mb-5">popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-5 gap-8">
                @forelse ($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres" />
                @empty
                    <h2>NoMovies :( </h2>
                @endforelse
                
                
            </div>
        </div>
        <div class="flex justify-center items-center mt-20 text-large">
            <a href="/" class="text-2xl text-orange-500 ">Next -></a>
        </div>
        
    </div>



    <div class="font-sans container mx-auto pt-16 md:px-16 ">
        <div class="popular-movies mt-16">
            <h2 class="uppercase tracking-winder text-orange-500 text-lg font-semibold mb-5">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-5 gap-8">
                @forelse ($nowPlayingMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres" />
                @empty
                    <h2>NoMovies :( </h2>
                @endforelse
                
                
            </div>
        </div>
    </div>
@endsection