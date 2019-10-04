<?php

namespace App\Http\Controllers;

use App\Trade;
use App\TradePost;
use App\Post;
use App\Account;
use App\User;
use App\Bank;
use DB;
use Auth;
use Illuminate\Http\Request;

class TradeController extends Controller
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
        $account = Account::where('user_id', Auth::user()->id)->first();

        $trade = new Trade();
        if($request->hasFile('photo')){
            $trade->photo = $request->photo->store("post_images","public");
        }else{
            $trade->photo = "images/logo.png";
        }
        $trade->name = $request->name;
        $trade->description = $request->description;
        $trade->account_id = $account->id;
        $trade->post_id = $request->tradingid;
        $trade->save();

        $newpost = Trade::where('account_id', $account->id)->where('post_id', $request->tradingid)->first();
        $tradedpost = Post::where('id', $request->tradingid)->first();
        $owneracc = Account::where('id', $tradedpost->account_id)->first();
        $owner = User::where('id', $owneracc->user_id)->first();

        $tradepost = new TradePost();
        $tradepost->post_id = $request->tradingid;
        $tradepost->tradepost_id = $newpost->id;
        $tradepost->owner_id = $owner->id;
        $tradepost->trader_id = Auth::user()->id;
        $tradepost->save();

        $posts = Post::where('account_id', $account->id)->get();
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
     * @param  \App\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function show(Trade $trade)
    {
        $account = Account::where('user_id', Auth::user()->id)->first();

        return view("trades.show",[
            "account" => $account,
            "trade" => $trade,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function edit(Trade $trade)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trade $trade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trade $trade)
    {
        
    }
}


