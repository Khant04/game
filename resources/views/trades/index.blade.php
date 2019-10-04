@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <table>
                <tr>
                    <td> <h3> The Trade Game: </h3> </td>
                </tr>
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
            </table>
        </div>
        <div class="col-md-6 col-sm-12">
            <h3> Your Game: </h3>

            <form style="margin-top:50px;" method="POST" action="{{ route('trades.store') }}" enctype="multipart/form-data">
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

                <input type="text" name="tradingid" hidden value="{{$post->id}}">

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                    <button type="submit" style="color:#ffffff; background-color:#02075D; font-weight: bold; margin-top:10px; margin-left:40px; padding: 7px 105px 7px 105px;">
                            {{ __('Trade') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection