@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 col-sm-12>">                         
                <table>
                    <tr>
                        <td> 
                            <img src="{{Storage::url($post->photo)}}" width="200" height="100">
                        </td>
                    </tr>
                    <tr>
                        <td> {{$post->name}}</td>
                    </tr>
                    <tr>
                        <td> {{$post->description}}</td>
                    </tr>
                    <tr>
                        @if($account->id==$post->account_id)
                            <td> 
                                <font color="red"> You Can't Trade Your Own Post </font> <br>
                                <a href="{{ route('posts.show', $post) }}">
                                    <input type="button" value="View" style="color:#ffffff; background-color:#02075D;">
                                </a>
                            </td>
                        @else
                            <form method="POST" action="{{ route('tradeposts.store') }}">  
                                @csrf  
                                <td>
                                    <button type="submit" style="color:#ffffff; background-color:#02075D;">
                                        {{ __('Trade') }}
                                    </button>
                                    <input type="text" name="postid" value="{{$post->id}}" hidden>
                                    |
                                    <a href="{{ route('posts.show', $post) }}">
                                        <input type="button" value="View" style="color:#ffffff; background-color:#02075D;">
                                    </a>
                                </td>
                            </form>
                        @endif
                    </tr>
                </table>
            </div>
        @endforeach
    </div>
</div>
@endsection