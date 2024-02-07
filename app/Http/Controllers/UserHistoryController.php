<?php

namespace App\Http\Controllers;

use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UserHistoryController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $movies = [];
        $movieIds = [];

        $histories = UserHistory::where('user_id', $userId)->get();

        foreach ($histories as $history) {
            $id = $history->url;

            if (!in_array($id, $movieIds)) {
                $movieData = Http::withToken(config('services.tmdb.token'))
                    ->withOptions(['verify' => false])
                    ->get('https://api.themoviedb.org/3/movie/' . $id)
                    ->json();

                // Append the retrieved movie data to the $movies array
                $movies[] = $movieData;

                // Add the movie ID to the movieIds array to keep track of it
                $movieIds[] = $id;
            }
        }

        return view('user', ['movies' => $movies]);
    }
}
