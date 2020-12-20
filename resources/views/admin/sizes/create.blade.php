@extends('admin.layouts.master_layout')

@section('page')
    Add Size
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add Size</h4>
                        </div>
                        <div class="content">
                        {!! Form::open(['url' => 'admin/size']) !!}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {!! $errors->has('name')? 'has-error' : '' !!}">
                                    {!! Form::Label('name','Size Name:') !!}
                                    {!! Form::text('name',old('name'),['class'=>'form-control border-input','placeholder'=>'XXL']) !!}
                                    <span class="text-danger">{!! $errors->has('name')? $errors->first('name') : ''!!}</span>
                                </div>
                                
                            </div>
                            <div class="">
                                {!! Form::submit('Add size',['class'=>'btn btn-info btn-fill btn-wd']) !!}
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

