<?php

namespace App\Http\Controllers;

use App\TradePost;
use App\Trade;
use App\Post;
use App\Account;
use App\User;
use App\Bank;
use DB;
use Auth;
use Illuminate\Http\Request;

class TradePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::where('id', $request->postid)->first();
        return view("trades.index",[
            "post" => $post,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TradePost  $tradePost
     * @return \Illuminate\Http\Response
     */
    public function show(TradePost $tradePost)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TradePost  $tradePost
     * @return \Illuminate\Http\Response
     */
    public function edit(TradePost $tradePost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TradePost  $tradePost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TradePost $tradePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TradePost  $tradePost
     * @return \Illuminate\Http\Response
     */
    public function destroy(TradePost $tradePost)
    {
        //
    }
}
