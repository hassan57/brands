
@extends('admin.layouts.master_layout')

@section('page')
    View Sizes
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <div class="card row">
                        <div class="header col-md-2">
                            <h4 class="title">All Sizes</h4>
                            <p class="size">List of all stock</p>
                        </div>
                        <div class="col-md-4" style="margin-top:20px">
                        <a href="{{route('size.create')}}" class="btn btn-info   btn-wd'">Add<i class="fa fa-plus"></i></a>
                        </div>
                        <div class="content table-responsive table-center ">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sizes as $index=>$size)
                                <tr>
                                    <td>{!! $size->id !!}</td>
                                    <td>{!! $size->name !!}</td>
                                    <td>{!! $size->created_at->diffForHumans() !!}</td>
                                    <td>{!! $size->updated_at->diffForHumans() !!}</td>
                                    <td>
                                        {!! Form::open(['route'=>['size.destroy',$size->id],'method'=>'DELETE']) !!}
                                            {!! Form::button('<span class="ti-trash"></span>',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}
                                            {!! link_to_route('size.edit','',$size->id,['class'=>"btn btn-sm btn-info ti-pencil-alt"]) !!}
                                            {!! link_to_route('size.show','',$size->id,['class'=>"btn btn-sm btn-primary ti-view-list-alt"]) !!}
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

