
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
                            <h4 class="title">Color Detail</h4>
                            <p class="color">List of all stock</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <tbody>

                                <tr>
                                    <th>ID</th>
                                    <td>{!! $color->id !!}</td>
                                </tr>

                                <tr>
                                    <th>Name</th>
                                    <td>{!! $color->name !!}</td>
                                </tr>

                                <tr>
                                    <th>Color Code</th>
                                    <td>
                                        <div style="width: 60px; height:60px; border:0.1px solid #888; background-color:{{$color->color}} !important;"></div>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Created At</th>
                                    <td>{!! $color->created_at->diffForHumans() !!}</td>
                                </tr>

                                <tr>
                                    <th>Updated At</th>
                                    <td>{!! $color->updated_at->diffForHumans() !!}</td>
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















