<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * view all posts
     *
     * @return \Illuminate\View\View
     */
    public function viewAllPosts()
    {

        $posts =  DB::table('blog_post')->orderBy('id', 'DESC')->paginate(10);
        return view('admin.post.posts')->with('posts', $posts);
    }

    /**
     * add new post
     *
     * @return \Illuminate\View\View
     */
    public function newPosts()
    {
        return view('admin.post.new');
    }

   
    public function editPost(Request $request)
    {
        $post_id = $request->id;
        $post =  DB::table('blog_post')->find($post_id);
        return view('admin.post.edit')->with('post', $post);
    }

    

}
