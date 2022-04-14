<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('accueil');
    }

    public function contact()
    {
        return view('contact');
    }

    public function histoire()
    {
        return view('histoire');
    }

    public function mariage()
    {
        return view('mariage');
    }

    public function evenementiel()
    {
        return view('evenementiel');
    }

    public function shooting()
    {
        return view('shooting');
    }

    public function inscription()
    {
        return view('inscription');
    }

    public function gallerie()
    {
        return view('gallerie');
    }

    public function register()
    {
        return view('register');
    }
 
    

}
