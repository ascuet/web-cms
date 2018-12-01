<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
    	return view('frontend.pages.home');
    }
    public function about()
    {
    	return view('frontend.pages.about');
    }
    public function service()
    {
    	return view('frontend.pages.service');
    }
}
