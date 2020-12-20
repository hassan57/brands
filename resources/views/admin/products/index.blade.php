
@extends('admin.layouts.master_layout')

@section('page')
    View Products
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header col-md-2">
                            <h4 class="title">All Products</h4>
                            <p class="product">List of all stock</p>
                        </div>
                        <div class="col-md-1" style="margin-top:20px; margin-right: 8px">
                            <a href="{{route('product.create')}}" class="btn btn-info   btn-wd'">Add<i class="fa fa-plus"></i></a>
                        </div>
                        <div class="col-md-1" style="margin-top:20px; margin-right: 25px">
                            <a href="{{route('color.index')}}" class="btn btn-black btn-wd'">Colors <i class="fa fa-paint-brush"></i>
</a>
                        </div>
                        <div class="col-md-1" style="margin-top:20px;">
                            <a href="{{route('size.index')}}" class="btn btn-primary btn-wd'">Sizes <i class="fa fa-shopping-basket "></i></a>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Stock</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    
                                    <td>{!! $product->id!!}</td>
                                    <td>{!! $product->name!!}</td>
                                    <td>{!! $product->price!!}</td>
                                    <td>{!! $product->category->name!!}</td>
                                    <td><img src={!! url("uploads/products").'/'.$product->image !!} alt={!! $product->image!!} class="img-thumbnail" style="width: 50px"></td>
                                    <td>{!! $product->stock!!}</td>
                                    <td>
                                        {!! Form::open(['route'=>['product.destroy',$product->id],'method'=>'DELETE']) !!}
                                            {!! Form::button('<span class="ti-trash"></span>',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}
                                            {!! link_to_route('product.edit','',$product->id,['class'=>"btn btn-sm btn-info ti-pencil-alt"]) !!}
                                            {!! link_to_route('product.show','',$product->id,['class'=>"btn btn-sm btn-primary ti-view-list-alt"]) !!}
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

