<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $myMovies = Movie::where('id', 1)->get();
        dd($myMovies);
        return view('index');
    }
}
