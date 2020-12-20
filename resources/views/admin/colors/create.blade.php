@extends('admin.layouts.master_layout')

@section('page')
    Add Color
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add Color</h4>
                        </div>
                        <div class="content">
                        {!! Form::open(['url' => 'admin/color']) !!}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {!! $errors->has('name')? 'has-error' : '' !!}">
                                    {!! Form::Label('name','Color Name:') !!}
                                    {!! Form::text('name',old('name'),['class'=>'form-control border-input','placeholder'=>'red']) !!}
                                    <span class="text-danger">{!! $errors->has('name')? $errors->first('name') : ''!!}</span>
                                </div>

                                <div class="form-group  {!! $errors->has('color')? 'has-error' : '' !!}">
                                    {!! Form::Label('color','Color Code:') !!}
                                    {!! Form::color('color',old('descritpion'),['class'=>'form-control border-input']) !!}
                                    <span class="text-danger">{!! $errors->has('color')? $errors->first('color') : ''!!}</span>
                                </div>
                                
                            </div>
                            <div class="">
                                {!! Form::submit('Add Color',['class'=>'btn btn-info btn-fill btn-wd']) !!}
                            </div>
                            <div class="clearfix"></div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

