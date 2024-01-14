<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Nette\Utils\Random;

class MovieActors extends Controller
{
    public function index(){
        
        $page = rand(2,20);
        $actors=Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/person/popular?page='.$page)
        ->json()['results'];
        
        return view('actors',['actors'=>$actors]);
    }
    public function show($id){
        
        $actor=Http::withToken(config('services.tmdb.token'))
        ->withOptions(['verify' => false])
        ->get('https://api.themoviedb.org/3/person/'.$id.'?append_to_response=credits,videos,images')
        ->json();
        
       
        return view('actor',['actor'=>$actor]);
    }
}
