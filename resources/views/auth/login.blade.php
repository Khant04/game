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
                <h2> Log-in Here </h2>
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
                <form method="POST" action="{{ route('login') }}" style="padding-top:50px; color:white; background-color:#02075D;">               
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div>
                            <button type="submit" style="color:#ffffff; background-color:#02075D; font-weight: bold; margin-top:10px; margin-left:210px; padding: 7px 105px 7px 105px;">
                                {{ __('Login') }}
                            </button>
                            <br> <br>
                            @if (Route::has('password.request'))
                                <a style="margin-left:290px; padding-bottom:20px;" class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                
                </form>        
            </div>
        </div>  
    </div>
@endsection
