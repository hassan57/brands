@extends('front.layouts.master')

@section('content')
                    @include('admin.layouts.message')

   <!-- Start Carousel -->
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">

         <div class="item ">
            <img src="{{url('front_assets/images/zzz.webp') }}" alt="Men">
         </div>

         <div class="item ">
            <img src="{{url('front_assets/images/sss.png') }}" alt="Women">
         </div>

         <div class="item active">
            <img src="{{url('front_assets/images/bbb.png') }}" alt="Men">
         </div>

         <div class="item ">
            <img src="{{url('front_assets/images/aaa.png') }}" alt="Women">
         </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
      </a>

      <a class="right carousel-control" href="#myCarousel" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
  </div>
   <!-- End Carousel -->

   <!-- Start About Us --> 
   <section id="About">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-xs-12 " >
               <img src="{{url('front_assets/images/bbb.png')}}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-xs-12 " >
               <div class="about-text">
                  <h2>About Us</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <button type="button" class="btn btn-primary btn-lg">Learn more</button>
               </div>
            </div>
         </div>
      </div>
   </section>    
   <!-- End About Us -->
   @foreach ($categories as $category)
      <section id="men" class="text-center">
         <div class="container">
            <br><br>
            <h2 class=" wow fadeIn" data-wow-duration="2s">{{$category->name}}</h2>
            <div class="row">
               @foreach ($products as $product)
               @if ($product->category->name == $category->name)    
                  <div class="col-lg-3 col-md-6">
                     <div class="item">
                        <div class="group">
                           <img src="uploads/products/{{$product->image}}">
                           <div class="over">
                           <a href="{{url('product',$product->id)}}"><i class="fa fa-shopping-cart"></i></a>
                           </div>
                        </div>
                        <p class="lead">{{$product->name}}</p>
                        <span class="price">{{$product->price}}$</span>                
                     </div>
                  </div>
               @endif
               @endforeach
            </div>
         </div>
      </section>
   @endforeach
@endsection