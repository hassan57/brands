@extends('admin.layouts.master_layout')

@section('page')
    Add Products
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Add Product</h4>
                        </div>
                        <div class="content">
                        {!! Form::open(['url' => 'admin/product','files'=>'true']) !!}
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="{{old('id')}}">
                                <div class="form-group {!! $errors->has('name')? 'has-error' : '' !!}">
                                    {!! Form::Label('name','Product Name:') !!}
                                    {!! Form::text('name',old('name'),['class'=>'form-control border-input','placeholder'=>'MackBook']) !!}
                                    <span class="text-danger">{!! $errors->has('name')? $errors->first('name') : ''!!}</span>
                                </div>

                                <div class="form-group  {!! $errors->has('price')? 'has-error' : '' !!}">
                                    {!! Form::Label('price','Product Price:') !!}
                                    {!! Form::text('price',old('price'),['class'=>'form-control border-input','placeholder'=>'$2500']) !!}
                                    <span class="text-danger">{!! $errors->has('price')? $errors->first('price') : ''!!}</span>
                                </div>

                                <div class="form-group  {!! $errors->has('description')? 'has-error' : '' !!}">
                                    {!! Form::Label('description','Product Description:') !!}
                                    {!! Form::textarea('description',old('description'),['class'=>'form-control border-input','placeholder'=>'Product Description','cols'=>'30','rows'=>'7']) !!}
                                    <span class="text-danger">{!! $errors->has('description')? $errors->first('description') : ''!!}</span>
                                </div>

                                <div class="form-group  {!! $errors->has('cat_id')? 'has-error' : '' !!}">
                                    {!! Form::Label('cat_id','Product Category:') !!}
                                    {!! Form::select('cat_id',App\Category::pluck('name','id'),old('cat_id'),['class'=>'form-control border-input']) !!}
                                    <span class="text-danger">{!! $errors->has('cat_id')? $errors->first('cat_id') : ''!!}</span>
                                </div>

                                <div class="form-group  {!! $errors->has('stock')? 'has-error' : '' !!}">
                                    {!! Form::Label('stock','Product Stock :') !!}
                                    {!! Form::number('stock',old('stock'),['class'=>'form-control border-input','placeholder'=>'Product Stock']) !!}
                                    <span class="text-danger">{!! $errors->has('stock')? $errors->first('stock') : ''!!}</span>
                                </div>

                                <div class="form-group  {!! $errors->has('color')? 'has-error' : '' !!}">
                                    {!! Form::Label('color','Product color:') !!}<br>   
                                    @php
                                        $colors = \App\Color::all();
                                    @endphp
                                    @foreach ($colors as $color)
                                        <label style=" margin-left:15px;"><input style="height:18px; width:18px; cursor:pointer" type="checkbox" name="colors[]" value="{{$color->id}}"> <span style="width: 25px; height: 25px; border:.5px solid #888; display: inline-block; background: {{$color->name}}"></span></label>
                                    @endforeach
                                    <span class="text-danger">{!! $errors->has('color')? $errors->first('color') : ''!!}</span>
                                </div>

                                <div class="form-group  {!! $errors->has('size')? 'has-error' : '' !!}">
                                    {!! Form::Label('size','Product size:') !!}<br>   
                                    @php
                                        $sizes = \App\Size::all();
                                    @endphp
                                    @foreach ($sizes as $size)
                                        <label style="display:inline-block; margin-left:20px;  color: #666; font-size:16px;"><input style="height:18px; width:18px; cursor:pointer"  type="checkbox" name="sizes[]" value="{{$size->id}}"> {{$size->name}}</label>
                                    @endforeach
                                    <span class="text-danger">{!! $errors->has('size')? $errors->first('size') : ''!!}</span>
                                </div>
                               
                                <div class="form-group  {!! $errors->has('image')? 'has-error' : '' !!}">
                                    {!! Form::Label('image','Product Image:') !!}
                                    {!! Form::file('image',['class'=>'form-control border-input','id'=>'image']) !!}
                                    <div id="thumb-output"></div>
                                    <span class="text-danger">{!! $errors->has('image')? $errors->first('image') : ''!!}</span>
                                </div>
                                 
                            </div>
                            <div class="">
                                {!! Form::submit('Add Product',['class'=>'btn btn-info btn-fill btn-wd']) !!}
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

