
@extends('admin.layouts.master_layout')

@section('page')
    View Categories
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <div class="card row">
                        <div class="header col-md-2">
                            <h4 class="title">All Categories</h4>
                            <p class="category">List of all stock</p>
                        </div>
                        <div class="col-md-4" style="margin-top:20px">
                        <a href="{{route('category.create')}}" class="btn btn-info   btn-wd'">Add<i class="fa fa-plus"></i></a>
                        </div>
                        <div class="content table-responsive table-center ">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>NO.Product</th>
                                    <th>Desc</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $index=>$category)
                                <tr>
                                    <td>{!! $category->id !!}</td>
                                    <td>{!! $category->name !!}</td>
                                    <td>{!! $category->products->count()!!}</td>
                                    <td>{!! $category->description !!}</td>
                                    <td>
                                        {!! Form::open(['route'=>['category.destroy',$category->id],'method'=>'DELETE']) !!}
                                            {!! Form::button('<span class="ti-trash"></span>',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}
                                            {!! link_to_route('category.edit','',$category->id,['class'=>"btn btn-sm btn-info ti-pencil-alt"]) !!}
                                            {!! link_to_route('category.show','',$category->id,['class'=>"btn btn-sm btn-primary ti-view-list-alt"]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

