
@extends('admin.layouts.master_layout')

@section('page')
    View Colors
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <div class="card row">
                        <div class="header col-md-2">
                            <h4 class="title">All Colors</h4>
                            <p class="color">List of all stock</p>
                        </div>
                        <div class="col-md-4" style="margin-top:20px">
                            <a href="{{route('color.create')}}" class="btn btn-info   btn-wd'">Add<i class="fa fa-plus"></i></a>
                        </div>
                        <div class="content table-responsive table-center ">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Color</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($colors as $index=>$color)
                                <tr>
                                    <td>{!! $index+1 !!}</td>
                                    <td>{!! $color->name !!}</td>
                                    <td>
                                        <div style="width: 30px; height:30px; border:0.1px solid #888; background-color:{{$color->color}} !important;"></div>
                                    </td>
>
                                    <td>
                                        {!! Form::open(['route'=>['color.destroy',$color->id],'method'=>'DELETE']) !!}
                                            {!! Form::button('<span class="ti-trash"></span>',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}
                                            {!! link_to_route('color.edit','',$color->id,['class'=>"btn btn-sm btn-info ti-pencil-alt"]) !!}
                                            {!! link_to_route('color.show','',$color->id,['class'=>"btn btn-sm btn-primary ti-view-list-alt"]) !!}
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

