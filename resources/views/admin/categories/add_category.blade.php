@extends('admin.layouts.master_layout')

@section('page')
    Add Category
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add Category</h4>
                        </div>
                        <div class="content">
                        {!! Form::open(['url' => 'admin/category']) !!}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {!! $errors->has('name')? 'has-error' : '' !!}">
                                    {!! Form::Label('name','Category Name:') !!}
                                    {!! Form::text('name',old('name'),['class'=>'form-control border-input','placeholder'=>'Main Category']) !!}
                                    <span class="text-danger">{!! $errors->has('name')? $errors->first('name') : ''!!}</span>
                                </div>

                                <div class="form-group  {!! $errors->has('description')? 'has-error' : '' !!}">
                                    {!! Form::Label('description','Category description:') !!}
                                    {!! Form::textarea('description',old('descritpion'),['class'=>'form-control border-input','placeholder'=>'Category Decription']) !!}
                                    <span class="text-danger">{!! $errors->has('description')? $errors->first('description') : ''!!}</span>
                                </div>
                                
                            </div>
                            <div class="">
                                {!! Form::submit('Add Caregory',['class'=>'btn btn-info btn-fill btn-wd']) !!}
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

