<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Admin;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            if(Auth::check() && Auth::user()->isAdmin())  
            	return redirect('protected'); 
            else if(Auth::user())
            	return redirect('home');
           else
            return view('index');
    }
}
