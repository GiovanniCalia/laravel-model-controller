<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $myMovies = Movie::all();
        //dd($myMovies);
        $data = [
            'movies' => $myMovies
        ];
        return view('index', $data);
    }
}