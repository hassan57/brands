@extends('front.layouts.master')

@push('style')
<style>
    .r-nav {
        display: inline-flex !important;
        justify-content: center;
        list-style: none;
        
    }
    .r-nav li{
        margin: 3px;
        
    }
    h2{
        margin-top: 20px;
        margin-bottom: 5px;
    }
</style>
    


@endpush
@section('content')


    <!-- Start page title -->
    <div class="page-title text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Register</h2>
                    <ul class="r-nav">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>|</li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start register -->
    <div class="user-account">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="form">
                        {!! Form::open([url('/user/register'),'method' => 'POST','files'=>true]) !!}
                            <div class="form-group {!! $errors->has('username')? 'has-error' : '' !!}">
                                {!! Form::Label('username','Username:') !!}
                                {!! Form::text('username',old('username'),['class'=>'form-control','placeholder'=>'username','id'=>'username']) !!}
                                <span class="text-danger">{!! $errors->has('username')? $errors->first('username') : ''!!}</span>
                            </div>

                            <div class="form-group {!! $errors->has('first_name')? 'has-error' : '' !!}">
                                {!! Form::Label('first_name','First Name:') !!}
                                {!! Form::text('first_name',old('first_name'),['class'=>'form-control','placeholder'=>' first name','id'=>'first_name']) !!}
                                <span class="text-danger">{!! $errors->has('first_name')? $errors->first('first_name') : ''!!}</span>
                            </div>

                            <div class="form-group {!! $errors->has('last_name')? 'has-error' : '' !!}">
                                {!! Form::Label('last_name','Last Name:') !!}
                                {!! Form::text('last_name',old('last_name'),['class'=>'form-control','placeholder'=>'last name','id'=>'last_name']) !!}
                                <span class="text-danger">{!! $errors->has('last_name')? $errors->first('last_name') : ''!!}</span>
                            </div>
                            <div class="form-group {!! $errors->has('email')? 'has-error' : '' !!}">
                                {!! Form::Label('email','Email:') !!}
                                {!! Form::text('email',old('email'),['class'=>'form-control ','placeholder'=>'Email','id'=>'email']) !!}
                                <span class="text-danger">{!! $errors->has('email')? $errors->first('email') : ''!!}</span>
                            </div>
                            <div class="form-group {!! $errors->has('password')? 'has-error' : '' !!}">
                                {!! Form::Label('password','Password:') !!}
                                {!! Form::password('password',['class'=>'form-control ','placeholder'=>'Password','id'=>'password']) !!}
                                <span class="text-danger">{!! $errors->has('password')? $errors->first('password') : ''!!}</span>
                            </div>
                            <div class="form-group {!! $errors->has('password')? 'has-error' : '' !!}">
                                {!! Form::Label('password_confirmation','Confirm Password:') !!}
                                {!! Form::password('password_confirmation',['class'=>'form-control ','placeholder'=>'Confirm Password','id'=>'password_confirmation']) !!}
                                <span class="text-danger">{!! $errors->has('password')? $errors->first('password') : ''!!}</span>
                            </div>
                             <div class="form-group {!! $errors->has('birth_date')? 'has-error' : '' !!}">
                                {!! Form::Label('birth_date','Birth Date:') !!}
                                {!! Form::date('birth_date',old('birth_date'),['class'=>'form-control ','id'=>'birth_date']) !!}
                                <span class="text-danger">{!! $errors->has('birth_date')? $errors->first('email') : ''!!}</span>
                            </div>
                            <input type="file">
                             <div class="form-group {!! $errors->has('image')? 'has-error' : '' !!}">
                                {{ Form::label('image',"Image:", ['class' => 'control-label']) }}
                                {{ Form::File('image',['class' => 'form-control border-input image']) }}
                                <span class="help-block">{!! $errors->has('image')? $errors->first('image') : ''!!}</span>
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('uploads/users/default.jpg') }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                            </div>
                            <div class="form-group">
                                {!! Form::input('submit','','Sign Up',['class'=>'btn btn-info btn-block']) !!}
                            </div>
                            <div class="form-group">
                                <p>i have already an account  | <a href="{!! url('user/login') !!}">login here</a></p>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

