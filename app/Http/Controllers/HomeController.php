<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        //placed the middleware on the route for home
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function help()
    {
        return view('help');
    }

    public function contactus()
    {
        return view('contact_us');
    }

    public function forgotpassword()
    {
        return view('email');
    }
}
