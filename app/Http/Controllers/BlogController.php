<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{

	public function index()
    {
		$posts =  DB::table('blog_post')->orderBy('id', 'DESC')->paginate(10);
    	return view('blog')->with('posts', $posts);
    }

    public function view(Request $request)
    {
    	$id = $request->id;
		$post =  DB::table('blog_post')->find($id);
    	return view('post-view')->with('post', $post);
    }
}