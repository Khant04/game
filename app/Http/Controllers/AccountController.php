<?php

namespace App\Http\Controllers;

use App\Account;
use App\Post;
use App\Bank;
use App\TradePost;
use Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Account::where('user_id', Auth::user()->id)->first();
        $posts = Post::where('account_id', $account->id)->get();
        $user = Auth::user();
        $requestposts = TradePost::where('owner_id', Auth::user()->id)->get();

        return view("accounts.index",[
            "requestposts" => $requestposts,
            "account" => $account,
            "posts" => $posts,
            "user" => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("accounts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $account = new Account();        
        $account->address = ($request->address).",".($request->township).",".($request->city).",".($request->district);
        $account->user_id = Auth::user()->id;
        $account->save();
        
        $account = Account::where('user_id', Auth::user()->id)->first();
        
        $bank = new Bank();
        $bank->account = $request->number;
        $bank->expired = $request->exp;
        $bank->cvv = $request->cvv;
        $bank->balance = 1000000;
        $bank->account_id = $account->id;
        $bank->save();
        
        $user = Auth::user();
        $posts = Post::where('account_id', $account->id)->get();
        $requestposts = TradePost::where('owner_id', Auth::user()->id)->get();
        
        return view("accounts.index",[
            "user" => $user,
            "posts" => $posts,
            "requestposts" => $requestposts,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
