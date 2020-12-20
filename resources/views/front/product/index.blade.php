@extends('front.layouts.master')
@push('js')
<script>
  
$(document).ready(function () {

    $('#quantity').click(function(){
      const qtyi = $(this).val();
      console.log(qty)
  });
  
}); 

</script>
    
@endpush
@section('content')
      <section id="Item-Choice">
        <div class="container">
           @include('admin.layouts.message')
          {!! Form::open(['route'=>'cart']) !!}
            <div class="row">
                <div class="col-lg-3">
                    <div class="item-image">  
                        <img src="{{url('uploads/products').'/'.$product->image}}" alt="{{$product->image}}" class="img-responsive">
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Item Name</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Quaintity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            <tr>                             
                              <td>{{$product->name}}</td>

                              <td>
                                <div class="form-group">
                                  <select class="form-control" name="color" id="color">
                                    @foreach ($product->colors as $color)
                                    <option name = "color"value="{{$color->name}}">{{$color->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </td>

                              <td>
                                <div class="form-group">
                                  <select class="form-control"name="size" id="size">
                                    @foreach ($product->sizes as $size)
                                      <option name="size"value="{{$size->name}}">{{$size->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </td>
                          
                              <td>
                                <div class="form-group">
                                  <select class="form-control" name="quantity" id ="quantity">
                                    @for ($i = 1; $i < ($product->stock /5); $i++)                                  
                                      <option name="quantity" id ="quantity" value="{{$i}}">{{$i}}</option>
                                    @endfor                                                              
                                  </select>
                                </div>
                              </td>
                              <td id="price">{{$product->price}}</td>
                              <td id="total">{{$product->price}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
           
                <div class="col-lg-9">
                      <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                              <th>Description</th>
                            </tr>
                            <tr>
                              <td>{{$product->description}}</td>
                            </tr>
                        </table>
                    </div>
                </div>          
            </div>
  
            <div class="row">
              <div class="col-lg-9 text-center">
                <a class="btn btn-info Button-Return" href="{{url('/')}}">Return To Website</a>
              </div>
              <div class="col-lg-3">
                {!! Form::hidden('id',$product->id) !!}
                {!! Form::hidden('name',$product->name) !!}                                
                {!! Form::hidden('price',$product->price) !!}                                         
                <button class="btn btn-info Button-Add" type="submit" id="Button-Add" type="button"><i class="ti-shopping-cart"></i>Add to cart</button>
              </div>
            </div>

            {!! Form::close() !!}
        </div>
    </section>
@endsection

@section('script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endsection

