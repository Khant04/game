@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4" style="margin-bottom:10px;">
            <div class="card">
                <div class="card-body">
                    
                    <table>
                        <tr>
                            <td>
                                <img src="{{Storage::url($post->photo)}}" width="200" height="100">
                            </td>
                        </tr>
                        <tr>
                            <td> <hr> </td>
                        </tr>
                        <tr>
                            <td> <b> Name: </b> {{$post->name}} </td>
                        </tr>
                        <tr>
                            <td> <hr> </td>
                        </tr>
                        <tr>
                            <td> <b> Description: </b> {{$post->description}}} </td>
                        </tr>
                        <tr>
                            <td> <hr> </td>
                        </tr>
                        <tr>
                            @if($account->id==$post->account_id)
                                <td> <font color="red"> You Can't Trade Your Own Post </font> </td>
                            @else
                                <td>
                                    <a href="{{route('trades.create')}}">
                                        <button type="submit" style="color:#ffffff; background-color:#02075D; font-weight: bold; margin-top:10px; margin-left:40px; padding: 7px 105px 7px 105px;">
                                            {{ __('Trade') }}
                                        </button>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection