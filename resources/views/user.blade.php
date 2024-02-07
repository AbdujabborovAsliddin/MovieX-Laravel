@extends('layouts.main')

@section('content')
   
<div class="mt-28 mx-auto w-2/3  flex flex-col justify-center items-center">
    <h1 class="text-center mb-8 text-3xl">User History</h1>

    <div class="flex flex-wrap mx-auto justify-center">
        @forelse ($movies as $movie)
            <div class="p-4 m-2 max-w-xs flex flex-row justify-start gap-3 border-b-2" style="width: 300px;">
                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="w-12">
                <h2 class="text-lg font-semibold mt-2">{{ $movie['title'] }}</h2>
            </div>
        @empty
            <p>No movies found.</p>
        @endforelse
    </div>
    
            
            <form class="mt-10" action="{{ route('logout') }}" method="post">
                @csrf
                <button class="bg-orange-500 px-5 py-3 hover:text-white text-gray-900 rounded-sm font-bold" type="submit">LogOut</button>
            </form>
</div>
@endsection
