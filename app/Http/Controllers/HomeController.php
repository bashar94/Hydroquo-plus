<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()     
    {
        $posts =  DB::table('blog_post')->orderBy('id', 'DESC')->limit(5)->get();
        return view('dashboard')->with('posts', $posts);
    }
}
