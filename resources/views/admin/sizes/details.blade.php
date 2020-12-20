
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
                            <h4 class="title">Size Detail</h4>
                            <p class="size">List of all stock</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <tbody>

                                <tr>
                                    <th>ID</th>
                                    <td>{!! $size->id !!}</td>
                                </tr>

                                <tr>
                                    <th>Name</th>
                                    <td>{!! $size->name !!}</td>
                                </tr>

                                <tr>
                                    <th>Created At</th>
                                    <td>{!! $size->created_at->diffForHumans() !!}</td>
                                </tr>

                                <tr>
                                    <th>Updated At</th>
                                    <td>{!! $size->created_at->diffForHumans() !!}</td>
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















