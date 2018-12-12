@extends('master1')
@section('title', ' | shop page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s"><strong> {{$arrival->book_category}} Category</strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s s"> The Book shop is dedicated to provide books and stationery at affordable prices to students from Pre-School to the Tertiary Level </p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>

<div class="container">
	<div class="row mt-5">
		<h4 class="text-muted col-md-12 text-center pb-3">Our <span style=" color: #a4b83b;">{{$arrival->book_category}} </span>Category </h4>


      @foreach($arrival->books as $book )
		    <div class="col-md-3 pb-3">
		    	<div class="card">
                <img class="card-img-top" src="/img/{{ $book->book_image}}" alt="Card image cap" width="250" height="250">
                <h5 class="card-title pt-3 text-center">{{  $book->book_name }}</h5>
                <p class="text-center">Author: {{  $book->book_author }}</p>
                <p class="text-center">GHS {{ $book->book_price}}.00</p>
            </div>
            </div>
       @endforeach
       
       <div class="col-md-12 mt-3 text-center"><a href="/shop" class="text-dark btn btn-pill btn-outline-secondary" > Back to shop</a></div>
	</div>
</div>

        


@endsection



@section('footer')

    @include('partials.footer')

@endsection