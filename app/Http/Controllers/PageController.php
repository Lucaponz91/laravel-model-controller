<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // SELECT * FROM BOOKS
        return view('home', compact('movies'));
    }
}
