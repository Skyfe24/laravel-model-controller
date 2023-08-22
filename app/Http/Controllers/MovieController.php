<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = config('Movie');
        dd($movies);
        return view('Movie.index', compact('movies'));
    }
}