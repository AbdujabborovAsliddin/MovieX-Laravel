<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UserHistoryController;
use App\Models\UserHistory;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $page = rand(2,20);
        $popularMovies=Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/movie/popular?page='.$page)
        ->json()['results'];
        
        $nowPlayinMovies=Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/movie/now_playing')
        ->json()['results'];

        $genresArray=Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/genre/movie/list')
        ->json()['genres'];

        $genres=collect($genresArray)->mapWithKeys(function ($genre){
            return [$genre['id']=>$genre['name']];
        });

        
        return view('index',[
            'popularMovies'=>$popularMovies,
            'nowPlayingMovies'=>$nowPlayinMovies,
            'genres'=>$genres,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, UserHistoryController $userHistoryController)
    {

        $history=UserHistory::create([
            'user_id'=>auth()->user()->id,
            'url'=>$id
        ]);
        $userHistoryController->index($history);
        $movie=Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
        ->json();
        return view('show',['movie'=>$movie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function send(Request $request){
        $name = $request->input('name');
        $avatar = $request->input('avatar');
        
        return view('index', ['name' => $name, 'avatar' => $avatar]);
    }
}
