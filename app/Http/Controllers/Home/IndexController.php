<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Home\HomeBaseController;

class IndexController extends HomeBaseController
{
    public function index(){
        return view('home.index.index');
    }

    public function dynamic(){
        return view('home.index.dynamic');
    }

    public function about(){
        return view('home.index.about');
    }

    public function contact(){
        return view('home.index.about');
    }

}
