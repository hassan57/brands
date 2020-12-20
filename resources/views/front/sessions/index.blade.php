@extends('front.layouts.master')
@push('style')
<style>
    .login{
        margin: 15px 0px 30px 0px;
        width: 120px;
        font-size: 19px;
    }
    h2{
        margin-top: 0px;
        margin-bottom: -15px;
        text-align: 
    }
</style>
    


@endpush
@section('content')
    <div class="row">
        <div class="col-md-12" id="register">
            <div class="card col-md-6">
                <br><br>
                <div class="card-body">
                    <h2 class="card-title">Login</h2>
                    <hr>
                    @include('admin.layouts.message')
                    {!! Form::open([url('/user/login')]) !!}
                        <div class="form-group {!! $errors->has('email')? 'has-error' : '' !!}">
                            {!! Form::Label('email','Email:') !!}
                            {!! Form::text('email','',['class'=>'form-control border-input','placeholder'=>'Email','id'=>'email','required'=>'required']) !!}
                            <span class="text-danger">{!! $errors->has('email')? $errors->first('email') : ''!!}</span>
                        </div>
                        <div class="form-group {!! $errors->has('password')? 'has-error' : '' !!}">
                            {!! Form::Label('password','Password:') !!}
                            {!! Form::password('password',['class'=>'form-control border-input','placeholder'=>'Password','id'=>'password','required'=>'required']) !!}
                            <span class="text-danger">{!! $errors->has('password')? $errors->first('password') : ''!!}</span>
                        </div>
                        <div class="form-group">
                            <h4>I Not have an account  | <a href="{!! url('user/register') !!}">Register here</a></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Remeber me</label>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-link">Forget your password</a>
                            </div> 
                        </div>
                        
                        {!! Form::input('submit','','Login',['class'=>'btn login btn-info col-md-2']) !!}
                    {!! Form::close() !!}
                </div>
                <br><br><br>
            </div>
        </div>
    </div>
@endsection