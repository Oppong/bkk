@extends('master1')
@section('title', ' | shop page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s"><strong> Shop  </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s s"> Check out our online shop for your Books and Stationery  </p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>

 <div class="container">
            
                <h4 class="text-muted w-full text-center mt-16 pb-16">Our Books Category </h4>
                  
                    <div class=" flex flex-wrap -mx-4">
                           @foreach($arrivals as $arrival)
                               <div class="w-1/4  mb-4 px-4">
                                   <a href="/showbook/ {{ $arrival->id}}" class="text-muted font-sans text-sm text-uppercase"><h6> {{ $arrival->book_category}} </a></h6> 
                               </div> 
                           @endforeach
                    </div>
               <div class="flex flex-wrap mt-5 mx-2">

                   @foreach($books as $book)
                              <div class=" w-full md:w-1/4  px-2 mb-4">
                                  <div class="shadow-sm bg-white">
                                    <div class="shadow rounded-lg bg-white">
                                        <img class="px-4 py-2 h-64" src="/img/{{ $book->book_image}}" >
                                        <h5 class=" pt-3 text-center pb-1 text-sm">{{  $book->book_name }}</h5>
                                        <p class="text-center pb-1"> <strong>By: {{  $book->book_author }} </strong></p>
                                        <p class="text-center"> <strong>GHS {{ $book->book_price}} .00</strong></p>
                                        
                                      </div>
                                 </div>
                              </div>      
                     @endforeach
             </div>
            
        </div><!-- end of container -->


@endsection



@section('footer')

    @include('partials.footer')

@endsection