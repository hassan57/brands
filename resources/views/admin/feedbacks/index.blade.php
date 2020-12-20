
@extends('admin.layouts.master_layout')

@section('page')
    View Feedbacks
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <div class="card row">
                        <div class="header col-md-2">
                            <h4 class="title">All Feedbacks</h4>
                            <p class="feedback">List of all stock</p>
                        </div>

                        <div class="content table-responsive table-center ">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($feedbacks as $index=>$feedback)
                                <tr>
                                    <td>{!! $index+1 !!}</td>
                                    <td>{!! $feedback->name !!}</td>
                                    <td>{!! $feedback->email !!}</td>
                                    <td>{!! $feedback->message !!}</td>
                                    <td>
                                        {!! Form::open(['route'=>['feedbacks.destroy',$feedback->id],'method'=>'DELETE']) !!}
                                            {!! Form::button('<span class="ti-trash"></span>',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}
                                            {!! link_to_route('feedbacks.show','',$feedback->id,['class'=>"btn btn-sm btn-primary ti-view-list-alt"]) !!}
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

