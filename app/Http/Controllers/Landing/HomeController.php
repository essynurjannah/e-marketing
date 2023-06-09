<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('Landing.index');
    }
    public function about(){
        return view('Landing.about');
    }
    public function blog(){
        return view('Landing.blog-post');
    }
    public function detail(){
        return view('Landing.detail');
    }
    public function fasilitas(){
        return view('Landing.fasilitas');
    }
    public function virtualTour(){
        return view('Landing.virtualTour');
    }
}
