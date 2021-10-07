<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(){
        $title = "Movies";
        return view('home', compact('title'));
    }
}
