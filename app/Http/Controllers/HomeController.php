<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $abouts = About::all();
        $posts = Post::all();
        return view('home', compact(['abouts','posts']));
    }
    public function about()
    {
        $abouts = About::all();
        return view('about', compact('abouts'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function adminHome()
    {
        return view('admin.dashboard');
    }
}
