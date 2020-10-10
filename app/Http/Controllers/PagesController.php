<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.welcome')->with('title', 'About us');
    }

    public function training(){
        return view('pages.training')->with('title', 'Training');
    }

    public function contact(){
        return view('pages.contact')->with('title', 'Contact');
    }

    public function consulting(){
        return view('pages.consulting ')->with('title', 'Consulting');
    }
}
