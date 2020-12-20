
@extends('admin.layouts.master_layout')

@section('page')
    Edit Categories
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Category</h4>
                        </div>
                        <div class="content">
                            {!! Form::open(['url' => ['admin/category',$category->id],'method'=>'put']) !!}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group {!! $errors->has('name')? 'has-error' : '' !!}">
                                        {!! Form::Label('name','category Name:') !!}
                                        {!! Form::text('name',$category->name,['class'=>'form-control border-input','placeholder'=>'MackBook','required'=>'required']) !!}
                                        <span class="text-danger">{!! $errors->has('name')? $errors->first('name') : ''!!}</span>
                                    </div>

                                    <div class="form-group  {!! $errors->has('description')? 'has-error' : '' !!}">
                                        {!! Form::Label('description','Category Description:') !!}
                                        {!! Form::textarea('description',$category->description,['class'=>'form-control border-input','placeholder'=>'category Description','cols'=>'30','rows'=>'7']) !!}
                                        <span class="text-danger">{!! $errors->has('description')? $errors->first('description') : ''!!}</span>
                                    </div>                                
                                    
                                </div>
                                <div class="">
                                    {!! Form::submit('update category',['class'=>'btn btn-info btn-fill btn-wd']) !!}
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

