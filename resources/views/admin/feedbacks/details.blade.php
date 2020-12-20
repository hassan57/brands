
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
                            <h4 class="title">Feedback Detail</h4>
                            <p class="feedback">List of all stock</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <tbody>

                                <tr>
                                    <th>ID</th>
                                    <td>{!! $feedback->id !!}</td>
                                </tr>

                                <tr>
                                    <th>Name</th>
                                    <td>{!! $feedback->name !!}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{!! $feedback->email !!}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{!! $feedback->message !!}</td>
                                </tr>

                                <tr>
                                    <th>Sent At</th>
                                    <td>{!! $feedback->created_at->diffForHumans() !!}</td>
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















