<?php

namespace App\Http\Controllers;

use App\Post;
use App\Account;
use App\TradePost;
use Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();                
        $account = Account::where('user_id', Auth::user()->id)->first();

        return view("posts.index",[
            "posts" => $posts,
            "account" => $account,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view("posts.create",[
            "user" => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = Account::where('user_id', Auth::user()->id)->first();

        $post = new Post();
        if($request->hasFile('photo')){
            $post->photo = $request->photo->store("post_images","public");
        }else{
            $post->photo = "images/logo.png";
        }
        $post->name = $request->name;
        $post->description = $request->description;
        $post->account_id = $account->id;
        $post->save();

        $posts = Post::where('account_id', $account->id)->get();
        $user = Auth::user();
        $requestposts = TradePost::where('owner_id', Auth::user()->id)->get();

        return view("accounts.index",[
            "account" => $account,
            "posts" => $posts,
            "user" => $user,
            "requestposts" => $requestposts,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $account = Account::where('user_id', Auth::user()->id)->first();
        
        return view("posts.show",[
            "account" => $account,
            "post" => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
