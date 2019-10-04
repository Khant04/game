@extends('layouts.app')

@section('mystyle')
    <style>
        .mapouter{
            position:relative;
            text-align:right;
            height:500px;
            width:600px;
        }
        
        .gmap_canvas {
            overflow:hidden;
            background:none !important;
            height:500px;
            width:600px;
        }
    </style>
@endsection

@section('content')
    <div class="row" style="background-color:transprant;">
        <div class="col-md-12 col-sm-12" style="padding-bottom:70px;">
            <center>
                <font size="10" face="Bodoni MT" color="#02075D">
                    "Trade With Us &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <br>
                        Play New Experiences..." - TRADERS
                </font>           
            </center>
        </div>
    </div>

    <div class="row" style="background-color:white;">    
        <div class="col-md-12 col-sm-12" style="padding-right:150px; text-align:right; padding-top:10px;">
            <font face="Bodoni MT" color="#02075D">
                <h2> View Posts </h2>
            </font>            
        </div>
    </div>

    <div class="row" style="background-color:white;">    
        <div class="col-md-1 col-sm-12">
        </div>
        <div class="col-md-5 col-sm-12">
            <iframe width="550" height="300" src="https://www.youtube.com/embed/uz7LtabOeew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <div class="col-md-5 col-sm-12" style="box-shadow: 0 0 10px 3px rgba(100, 100, 100, 0.7); background-color:#ffffff; margin-top:0px; margin-bottom:50px; text-align:center; height:auto; width:100%">                                                               
            <div>            
                <a href="{{route('posts.index')}}">
                    <button type="submit" style="color:#ffffff; background-color:#02075D; font-weight: bold; margin-top:10px; margin-left:40px; padding: 7px 105px 7px 105px;">
                        {{ __('View Posts') }}
                    </button>
                </a>
                <br> <br> <br>
                <a href="https://tgb.qq.com/en/">
                    <img src="/images/ad.jpg" width="100%" height="300px">
                </a>
            </div>
        </div>  
    </div>
@endsection
