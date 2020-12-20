@extends('front.layouts.master')
@push('style')
<style>
    h2{
        margin-top: 30px;
        font-size: 30px;
        margin-bottom: 25px;
    }
    h3{
        margin-bottom: 18px;
    }
</style>
    
@endpush
@section('content')
<div class="container">
    <h2><i class="fa fa-shopping-cart"></i> Shooping Cart</h2>
        @if(Cart::instance('default')->count() > 0)
        <h3>{!! Cart::instance('default')->count() !!} items in Shopping Cart</h3>
        <div class="cart-items">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.layouts.message')
                    <table class="table table-responsive table-bordered">
                        <tbody>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Options</th>
                            </tr>
                            
                            @foreach(Cart::instance('default')->content() as $row)
                            {{--   dd($row)   --}}
                            <tr>
                                <td><img src="{!! url('uploads/products').'/'.$row->model->image !!}" style="width: 4em; height:4em"></td>
                                <td>
                                    <strong>{!! $row->model->name !!}</strong><br>
                                    <small>{!! $row->model->description !!}</small>
                                </td>
                                <td>
                                    <div style="width: 25px; height:25px; border:0.1px solid #888; background-color:{{$row->options->color}} !important;"></div>
                                </td>
                                <td>
                                   {{$row->options->size}}
                                </td>
                                <td>
                                    {{$row->qty}}
                                </td>
                                <td>{!! $row->total()!!}$</td>
                                <td>
                                    {!! Form::open(['route'=>['cart.destroy',$row->rowId],'method'=>'DELETE']) !!}
                                    {!! Form::button('Delete',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}
                                        {!! link_to_route('cart.save','Save For Later',$row->rowId,['class'=>'btn btn-sm btn-success']) !!}
                                    {!! Form::close() !!}
                                </td>
                             </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Price Details -->
                <div class="col-md-6">
                    <div class="sub-total">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th colspan="2">Price Details</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>Subtotal </td>
                                <td>{!! Cart::subtotal() !!}</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>{!!  Cart::tax() !!}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th>{!! Cart::total()  !!}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Save for later  -->
                <div class="col-md-12">
                    <a href="{!! url('/') !!}" class="btn btn-primary">Continue Shopping</a>
                    <a href="{!! url('/checkout') !!}"class="btn btn-info">Proceed to checkout</a>
                    <hr>
                </div>
            @else
                <h1 class="text-center">No Item To Show</h1 >
                <br>
                <br>
                <a href="{!! url('/') !!}" class="btn btn-primary">Continue Shopping</a>
                <br>
                <br>
            @endif
            <div class="col-md-12">
                @if(Cart::instance('saveForLater')->count() > 0)
                <h3>{!! Cart::instance('saveForLater')->count() !!} items Save for Later</h3>
                <table class="table table-responsive table-bordered">
                    <tbody>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Options</th>
                        </tr>

                        @foreach(Cart::instance('saveForLater')->content() as $row)
                            <tr>
                                <td><img src="{!! url('uploads/products').'/'.$row->model->image !!}" style="width: 4em; height:4em"></td>
                                <td>
                                    <strong>{!! $row->model->name !!}</strong><br>
                                    <small>{!! $row->model->description !!}</small>
                                </td>
                                <td>
                                    <div style="width: 25px; height:25px; border:0.1px solid #888; background-color:{{$row->options->color}} !important;"></div>
                                </td>
                                <td>
                                   {{$row->options->size}}
                                </td>
                                <td>
                                    {{$row->qty}}
                                </td>
                                <td>{!! $row->total()!!}$</td>
            
                            <td>
                                {!! Form::open(['route'=>['savelater.destroy',$row->rowId],'method'=>'DELETE']) !!}
                                    {!! Form::button('Delete',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("You Sure To Delete This")']) !!}
                                    {!! link_to_route('savelater.move','Move To Cart',$row->rowId,['class'=>'btn btn-sm btn-success']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                 @else
                @endif            
            </div>
        </div>
    </div>
</div>
   
@endsection

@section('script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection

