<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHistoryController extends Controller
{
    public function index($history)
    {
        dump($history);
        return view('user');
    }
}
