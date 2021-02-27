<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function blog($id,$myAuthor='author by default'){
        $posts = [
            1 => ['title'=> 'learn laravel 8'] ,
            2 => ['title'=> 'learn Vuejs3' ],
        ];
        return view('posts.show', [
            'data'=> $posts[$id],
            'author'=> $myAuthor
        ]);
    }
}
