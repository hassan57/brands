@extends('admin.layouts.master_layout')

@section('page')
    Order Details
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                 <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Billings Details</h4>
                            <p class="category">Billings Details</p>
                        </div>
                         <div class="content table-responsive table-full-width">
                            <table class="table table-striped"> 
                                    <tr>
                                        <th>Custmor Name</th>
                                        <td>{{ $billing->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $billing->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ $billing->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>{{ $billing->city }}</td>
                                    <tr>
                                        <th>Province</th>
                                        <td>{{ $billing->province }}</td>
                                    </tr>
                                    <tr>
                                        <th>Postal</th>
                                        <td>{{ $billing->postal }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $billing->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td>{{ $billing->created_at->diffForHumans() }}</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Order Details</h4>
                            <p class="category">Order details</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $billing->order->id }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ $billing->order->created_at->diffForHumans() }}</td>
                                </tr>
                                <tr>
                                    <th>Product NO</th>
                                    <td>{{ $billing->order->order_item->count() }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if ($billing->order->status)
                                            <span class="label label-success">Confirmed</span>
                                        @else
                                            <span class="label label-warning">Pending</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>  
                  
                <div class="col-md-6">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">User Details</h4>
                            <p class="category">User Details</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                               
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $order->user->fullname }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $order->user->email }}</td>
                                </tr>                                
                                <tr>
                                    <th>Image</th>
                                    <td><img src={!! url("uploads/users").'/'.$order->user->image !!} alt = {!! $order->user->image!!} class="img-thumbnail" style="width: 100px"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">product_item Details</h4>
                            <p class="category">product_item Details</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                             <table class="table table-striped">
                                <tr>
                                    <th>NO</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Qauntity</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                </tr>
                                <tbody>
                             
                                @foreach($order->order_item as $index=>$product_item )  
                                <tr>
                                    <td>{!! $index+1!!}</td>
                                    <td>{!! $product_item->product->name!!}</td>
                                    <td>{!! $product_item->product->category->name!!}</td> 
                                    <td><div style="width: 20px; height:20px; border:0.1px solid #888; display:inline-block; background-color:{!! $product_item->product_color !!}!important;"></div></td>
                                    <td>{!! $product_item->product_size!!}</td>
                                    <td>{!! $product_item->quainty!!}</td>
                                    <td>{!! $product_item->price !!}$</td>
                                    <td><img src={!! url("uploads/products").'/'.$product_item->product->image !!} alt={!! $product_item->product->image!!} class="img-thumbnail" style="width: 50px"></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/admin/billings') }}" class="btn btn-success">Back to Billings</a>
            </div>
        </div>
    </div>
@endsection