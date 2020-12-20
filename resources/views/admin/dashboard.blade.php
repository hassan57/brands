
@extends('admin.layouts.master_layout')

@section('page')
    Dashboard
@endsection

@section('content')
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-eye"></i>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="numbers">
                                    <p>Total Visitors</p>
                                    340
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                               <i class="ti-panel"></i> <a href="">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-danger text-center">
                                    <i class="ti-shopping-cart-full"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Orders</p>
                                    {!! $order->count() !!}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="ti-panel"></i> <a href={!! url('/admin/orders') !!}>Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-success text-center">
                                    <i class="ti-comment-alt"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Message</p>
                                    {!! $feedback->count() !!}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="ti-panel"></i> <a href={!! url('/admin/feedbacks') !!}>Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-info text-center">
                                    <i class="ti-user"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Users</p>
                                    {!! $user->count() !!}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr/>
                            <div class="stats">
                                <i class="ti-panel"></i> <a href={!! url('/admin/users') !!}>Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

