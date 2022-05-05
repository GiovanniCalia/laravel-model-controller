<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index(){
        $myMovie = new Movie();
        $myMovie->title = 'Rush Hour';
        $myMovie->nationality = 'chinese';
        //$myMovie->save();
        $myMovies = Movie::all()//where('nationality', 'like', '%british')
        //->get()
        ;
        dd($myMovies);

        $data = [
            'movies' => $myMovies
        ];
        return view('index', $data);
    }
}