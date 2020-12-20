
@extends('admin.layouts.master_layout')

@section('page')
    View Billings
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <div class="card">
                        <div class="header col-md-2">
                            <h4 class="title">All Billings</h4>
                            <p class="product">List of all stock</p>
                        </div>

                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>province</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($billings as $index=>$billing)
                                    @if ($billing->order->status)
                                    <tr>

                                        <td>{!! $index+1 !!}</td>
                                        <td>{!! $billing->name!!}</td>
                                        <td>{!! $billing->email!!}</td>
                                        <td>{!! $billing->province!!}</td>
                                        <td>{!! $billing->phone!!}</td>
                                        <td>
                                            {!! Form::open(['route'=>['billings.destroy',$billing->id],'method'=>'DELETE']) !!}
                                                {!! Form::button('<span class="ti-trash"></span>',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}

                                                {!! link_to_route('billings.show','',$billing->id,['class'=>"btn btn-sm btn-primary ti-view-list-alt"]) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endif
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

