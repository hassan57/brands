@extends('admin.layouts.master_layout')

@section('page')
    Users
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Users</h4>
                            <p class="category">List of all registered users</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>UserName</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $index=>$user)
                                    <tr>
                                        <td>{!! $user->id !!}</td>
                                        <td>{!! $user->fullname !!}</td>
                                        <td>{!! $user->username !!}</td>
                                        <td>{!! $user->email!!}</td>
                                        <td><img src={!! url("uploads/users").'/'.$user->image !!} alt = {!! $user->image!!} class="img-thumbnail" style="width: 50px"></td>
                                        <td>
                                            @if($user->status)
                                                <span class="label label-success">Active</span>
                                            @else
                                                <span class="label label-warning">blocked</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->status)
                                               {!! link_to_route('users.block','block',$user->id,['class'=>'btn btn-sm btn-warning']) !!}
                                            @else
                                               {!! link_to_route('users.active','active',$user->id,['class'=>'btn btn-sm btn-success']) !!}
                                            @endif
                                                {!! link_to_route('users.show','details',$user->id,['class'=>'btn btn-sm btn-primary']) !!}
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