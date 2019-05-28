<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Show the editor for editing posts.
     *
     * @return \Illuminate\View\View
     */
    public function post()
    {
        return view('admin.post.posts');
    }

    /**
     * Show the editor for editing posts.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('admin.post.edit');
    }

    /**
     * Update post
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        

        return back()->withStatus(__('Profile successfully updated.'));
    }

}
