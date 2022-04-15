<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){
        return view('/home/index');
    }

    public function products(){
        return view('/home/products');
    }
    public function about(){
        return view('/home/about');
    }
    public function blog(){
        return view('/home/blog');
    }
    public function contact(){
        return view('/home/contact');
    }
    public function testimonials(){
        return view('/home/testimonials');
    }
    public function terms(){
        return view('/home/terms');
    }
}
