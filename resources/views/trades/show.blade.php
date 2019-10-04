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
                                <img src="{{Storage::url($trade->photo)}}" width="200" height="100">
                            </td>
                        </tr>
                        <tr>
                            <td> <hr> </td>
                        </tr>
                        <tr>
                            <td> <b> Name: </b> {{$trade->name}} </td>
                        </tr>
                        <tr>
                            <td> <hr> </td>
                        </tr>
                        <tr>
                            <td> <b> Description: </b> {{$trade->description}} </td>
                        </tr>
                        <tr>
                            <td> <hr> </td>
                        </tr>
                        <tr>
                            <td>
                                <form style="margin-top:50px;" method="POST" action="{{ route('banks.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="requester" value="{{$trade->account_id}}" hidden>
                                    <button type="submit" style="color:#ffffff; background-color:#02075D; font-weight: bold; margin-top:10px; margin-left:40px; padding: 7px 105px 7px 105px;">
                                        Trade
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection