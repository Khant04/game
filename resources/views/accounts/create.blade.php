@extends('layouts.app')

@section('content')
<!-- Body Second Row (Start) -->
<div class="container">
    <div class="row">
            <!-- Register Form -->
            <div class="col-md-12 col-sm-12" style="box-shadow: 0 0 10px 3px rgba(100, 100, 100, 0.7); background-color: #ffffff; margin-top:60px; padding-bottom:15px; text-align:center; height:auto; width:100%">            
                <!-- Register Text -->
                <div>          
                    <h2 style="padding-top:15px; color:#02075D;1"> Add Your Address & Payment Information: </h2>
                </div>
                <hr>
                <form style="margin-top:50px;" method="POST" action="{{ route('accounts.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="No.00, Example Street,">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-2">
                                <input id="township" type="text" class="form-control" name="township" value="{{ old('township') }}" placeholder="Township">
                            </div>

                            <div class="col-md-2">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="City">
                            </div>

                            <div class="col-md-2">
                                <input id="district" type="text" class="form-control" name="district" value="{{ old('district') }}" placeholder="District">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Card No') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" placeholder="1234 1234 1234 1234">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cvv" class="col-md-4 col-form-label text-md-right">{{ __('CVV') }}</label>

                            <div class="col-md-6">
                                <input id="cvv" type="cvv" class="form-control" name="cvv" value="{{ old('cvv') }}" placeholder="123">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exp" class="col-md-4 col-form-label text-md-right">{{ __('EXP') }}</label>

                            <div class="col-md-6">
                                <input id="exp" type="exp" class="form-control" name="exp" value="{{ old('exp') }}" placeholder="11/11">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="submit" style="color:#ffffff; background-color:#02075D; font-weight: bold; margin-top:10px; margin-left:40px; padding: 7px 105px 7px 105px;">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                </form>
            </div>  
    </div>
</div>
<!-- Body Second Row (End) -->
@endsection
