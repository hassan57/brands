@extends('front.layouts.master')
@push('style')
<style>
    h2{
        margin-top: 15px;
        font-size: 40px;
        margin-bottom: -20px;
        text-align: center;
    }
    .torder .table{
        margin-top: -10px
    }
</style>
    
@endpush
@section('content')
<div class="container">
    <h2>Profile</h2>
    <h3  class="title">User Details</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th colspan="5">User Details <a href="" class="pull-right"><i class="fa fa-cogs"></i> Edit user</a></th>
        </tr>
        </thead>
        <tr>
            <th>ID</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>{{ $user->username}}</td>
        </tr>
        <tr>
            <th>Frirst Name</th>
            <td>{{ $user->first_name}}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{ $user->last_name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Birth Date</th>
            <td>{{ $user->birth_date }}</td>
        </tr>
        <tr>
            <th>Registered At</th>
            <td>{{ $user->created_at->diffForHumans()}}</td>
        </tr>
        <tr>
            <th>Image</th>
        <td><img src="{{url('uploads/users').'/'.$user->image}}" style="width: 140px"></td>
        </tr>
    </table>
    <hr>    

    <h3 class="title">Orders</h3>
    <div class="content table-responsive table-full-width">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="torder">
            <tr>
                @foreach ($user->order as $order)
                    <td>{{ $order->id }}</td>
                    <td>
                        @foreach ($order->product as $item)
                            <table class="table table-striped">
                                <tr>
                                    <td>{{ $item->name }}</td>
                                </tr>
                            </table>
                        @endforeach
                    </td>

                    <td>
                        @foreach ($order->order_item as $item)
                            <table class="table table-striped">
                                <tr>
                                    <td>{{ $item->quainty }}</td>
                                </tr>
                            </table>
                        @endforeach
                    </td>

                    <td>
                        @foreach ($order->order_item as $item)
                            <table class="table table-striped ">
                                <tr>
                                    <td>${{ $item->price }}</td>
                                </tr>
                            </table>
                        @endforeach
                    </td>

                    <td>
                        @if ($order->status)
                            <span class="label label-success">Confirmed</span>
                        @else
                            <span class="label label-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('/user/order') . '/' . $order->id }}" class="btn btn-info btn-sm">Details</a>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <hr><hr>

    </div>
    </div>
@endsection