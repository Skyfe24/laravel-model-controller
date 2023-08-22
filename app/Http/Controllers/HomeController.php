<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = config('Movie');
        return view('Movie,index', compact('movies'));


    }
}
