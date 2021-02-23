<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function program(){
        return view('program');
    }

    public function product(){
        return view('product');
    }

    public function news($title){
        return view('news', ['title' => $title]);
    }

    public function about(){
        return view('about-us');
    }
}
