@extends('admin.layouts.master_layout')

@section('page')
    Orders
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Orders</h4>
                            <p class="category">List of all orders</p>
                        </div>
                        <div class="content table-responsive table-full-width ">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>User Name</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $index=>$order)
                                <tr>
                                    <td>{!! $index+1!!}</td>
                                    <td>{!! $order->user->fullname !!}</td>
                                    <td>{!! $order->billing->address !!}</td>
                                    <td>
                                        @if($order->status)
                                           <span class="label label-success">Confirmed</span>
                                        @else
                                            <span class="label label-warning">Pending</span>
                                        @endif

                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['orders.destroy',$order->id],'method'=>'DELETE']) !!}
                                        @if($order->status)
                                        {!! link_to_route('orders.pending','Pending',$order->id,['class'=>'btn btn-sm btn-warning']) !!}
                                        @else
                                        {!! link_to_route('orders.confirm','Confirm',$order->id,['class'=>'btn btn-sm btn-success']) !!}
                                        @endif
                                        {!! link_to_route('orders.show','Details',$order->id,['class'=>'btn btn-sm btn-primary']) !!}
                                        {!! Form::button('<span class="ti-trash"></span>',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}
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
