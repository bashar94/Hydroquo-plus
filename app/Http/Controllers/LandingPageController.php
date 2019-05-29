<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{

	public function index()
    {
		$posts =  DB::table('blog_post')->orderBy('id', 'DESC')->limit(5)->get();
    	return view('index')->with('posts', $posts);
    }
}