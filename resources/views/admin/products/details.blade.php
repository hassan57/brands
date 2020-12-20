
@extends('admin.layouts.master_layout')

@section('page')
    Deatils
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Product Detail</h4>
                            <p class="category">List of all stock</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <tbody>

                                <tr>
                                    <th>ID</th>
                                    <td>{!! $product->id !!}</td>
                                </tr>

                                <tr>
                                    <th>Name</th>
                                    <td>{!! $product->name !!}</td>
                                </tr>

                                <tr>
                                    <th>Category</th>
                                    <td>{!! $product->category->name !!}</td>
                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <td>{!! $product->description !!}</td>
                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>{!! $product->price !!}</td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>
                                        @foreach($product->colors as $color)
                                            <div style="width: 35px; height:35px; border:0.1px solid #888; display:inline-block; background-color:{{$color->color}} !important;"></div>
                                        @endforeach 
                                    </td>
                                </tr>
                                <tr>
                                    <th>Size</th>
                                    <td>
                                        @foreach($product->sizes as $size)
                                            <h5 style="display:inline-block">{!! $size->name !!} -</h5>
                                        @endforeach
                                    </td>
                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td><img src={!! url("uploads/products").'/'.$product->image !!} alt="" class="img-thumbnail" style="width: 150px;"></td>
                                </tr>

                                <tr>
                                    <th>Stock</th>
                                    <td><h5> {!!$product->stock !!} </h5></td>
                                </tr>

                                <tr>
                                    <th>Created At</th>
                                    <td>{!! $product->created_at->diffForHumans() !!}</td>
                                </tr>

                                <tr>
                                    <th>Updated At</th>
                                    <td>{!! $product->created_at->diffForHumans() !!}</td>
                                </tr>
                                
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection















