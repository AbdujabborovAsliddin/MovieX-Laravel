@extends('layouts.main')
@section('content')
<div class="container mt-16 mx-auto px-16 py-12">
    <h2 class="text-3xl text-orange-500 font-semibold">Popular Actors</h2>
    <div class="grid grid-cols-5 gap-8">
        @foreach ($actors as $actor)
        <div class="actor mt-8">
            <a href="{{ route('actors.show', $actor['id']) }}">
                @if ($actor['profile_path'])
                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$actor['profile_path'] }}" alt="a" class="hover:opacity-75 transition easy-in-out duration-150">
                            @else
                                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-52 hover:opacity-75 transition easy-in-out duration-150">
                            @endif
                
            </a>
            <div class="mt-2">
                <a href="{{ route('actors.show', $actor['id']) }}">{{ $actor['name'] }}</a>
            </div>
        </div>

        @endforeach
    </div>
    <div class="flex justify-center items-center mt-20 text-large">
        <a href="/actors" class="text-2xl text-orange-500 ">Next -></a>
    </div>
</div>
@endsection