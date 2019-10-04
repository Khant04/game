<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 300px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #02075D;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
        }

        .sidenav a:hover {
            color: white;
        }

        .main {
            margin-left: 300px; /* Same as the width of the sidenav */        
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>

    <div class="sidenav">  
        <font color="white" style="padding-left:10px;"> Welcome form your dashboard... <h3 style="padding-left:10px;"> Mr.{{$user->name}} </h3> </font>
    <br> <br>
    <a href="{{route('accounts.index')}}"> Dashboard </a>
    <a href="{{route('posts.create')}}"> Create Posts </a>
    </div>

    <div class="main">
        <h3> Create Your Post: </h3>
            <form style="margin-top:50px;" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                
                <br>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">
                    </div>
                </div>

                <br>

                <div class="form-group row">
                    <input id="photo" name="photo" type='file' onchange="readURL(this);">
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                    <button type="submit" style="color:#ffffff; background-color:#02075D; font-weight: bold; margin-top:10px; margin-left:40px; padding: 7px 105px 7px 105px;">
                            {{ __('Post') }}
                        </button>
                    </div>
                </div>
        </form>
    </div>
</body>
</html> 
