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
        <a href="{{route('login')}}"> <img src="/images/logo.png" width="150px" height="150px"> </a> 
        <font color="white" style="padding-left:10px;"> Welcome form your dashboard... <h3 style="padding-left:10px;"> {{$user->name}} </h3> </font>
    <br> <br>
    <a href="{{route('accounts.index')}}"> Dashboard </a>
    <a href="{{route('posts.create')}}"> Create Posts </a>
    </div>
   
    <div class="main">
        <h3> Your Post Lists: </h3>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr style="background-color:#5D8AA8; color:white;">
                <th> No. </th>
                <th> Name. </th>
                <th> Description. </th>
                <th> Action. </th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td> {{$post->id}} </td>
                <td> {{$post->name}} </td>              
                <td> {{$post->description}} </td>              
                <td> <a href="{{ route('posts.show', $post->id) }}"> <button style="background-color:#02075D; color:white;"> Show </button> </a> </td>
            </tr>
            @endforeach
        </table>

        <br>

        <h3> Trade Request Lists: </h3>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr style="background-color:#5D8AA8; color:white;">
                <th> No. </th>
                <th> Your Post. </th>
                <th> Trade Post. </th>
                <th> Action. </th>
            </tr>
            @foreach($requestposts as $requestpost)
            <tr>
                <td> {{$requestpost->id}} </td>
                <td> {{$requestpost->post_id}} </td>              
                <td> {{$requestpost->tradepost_id}} </td>              
                <td> <a href="{{ route('trades.show', $requestpost->tradepost_id) }}"> <button style="background-color:#02075D; color:white;"> Show </button> </a> </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html> 
