@extends('admin.layouts.master_layout')

@section('page')
    Users Deatils
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header">
                            <h4 class="title">{!! $user->username !!}  Detail</h4>
                            <p class="category">List of all stock</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <tbody>

                                <tr>
                                    <th>User id</th>
                                    <td>{!! $user->order[0]->id !!}</td>
                                </tr>

                                <tr>
                                    <th>First Name</th>
                                    <td>{!! $user->first_name !!}</td>
                                </tr>

                                <tr>
                                    <th>Last Name</th>
                                    <td>{!! $user->last_name !!}</td>
                                </tr>

                                <tr>
                                    <th>UserName</th>
                                    <td>{!! $user->username !!}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{!! $user->email !!}</td>
                                </tr>
                                <tr>
                                    <th>Birth Date</th>
                                    <td>{!! $user->birth_date !!}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img src={!! url("uploads/users").'/'.$user->image !!} alt = {!! $user->image!!} class="img-thumbnail" style="width: 140px"></td>
                                </tr>

                                <tr>
                                    <th>Status User</th>
                                    <td>
                                        @if($user->status)
                                            <span class="label label-success">Active</span>
                                        @else
                                            <span class="label label-warning">blocked</span>
                                        @endif
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Created At</th>
                                    <td>{!! $user->created_at->diffForHumans() !!}</td>
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
