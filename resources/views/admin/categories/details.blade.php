
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
                            <h4 class="title">category Detail</h4>
                            <p class="category">List of all stock</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <tbody>

                                <tr>
                                    <th>ID</th>
                                    <td>{!! $category->id !!}</td>
                                </tr>

                                <tr>
                                    <th>Name</th>
                                    <td>{!! $category->name !!}</td>
                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <td>{!! $category->description !!}</td>
                                </tr>

                                <tr>
                                    <th>Number Of Product</th>
                                    <td>{!! $category->products->count() !!}</td>
                                </tr>

                                <tr>
                                    <th>Created At</th>
                                    <td>{!! $category->created_at->diffForHumans() !!}</td>
                                </tr>

                                <tr>
                                    <th>Updated At</th>
                                    <td>{!! $category->created_at->diffForHumans() !!}</td>
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















