@extends('master1')
@section('title', ' | Products page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/services.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s"><strong> OUR PRODUCTS  </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s"> Products being offered for sale by the Book shop </p>
       {{-- <div class="text-left"><button class="btn btn-pill btn-sm btnn">JOIN US</button></div> --}}
      </div><!-- carousel caption -->
    </div>
  </div>

<div class="container">


   <div class="flex flex-wrap mt-5 -mx-4">
    <h4 class="text-muted w-full text-center pb-16">Our Products</h4>
            <div class="w-full md:w-1/3 pb-4 px-4">
                <div class="text-center pb-4 font-sans"><i class=" icon-linegraph text-2xl " style="color: #a4b83b; "></i></div>
                <h5 class="text-muted text-center pb-2">PRE-SCHOOL BOOKS</h5>
                <p class="text-center text-sm">Buy your kids Pre-School Textbooks and Exercise Books such as <span style="color: #a4b83b;">(A1, C, D1)</span> from our shop.</p>
            </div>
            <div class="w-full md:w-1/3 pb-4 px-4">
                <div class="text-center pb-4 font-sans"><i class=" icon-globe text-2xl" style="color: #a4b83b;"></i></div>
                <h5 class="text-muted text-center pb-2">PRIMARY SCHOOL BOOKS</h5>
                <p class="text-center text-sm">Purchase Smplemade, Flamingo, Aki-ola, Topfact textbooks etc, from the various publishers from our shop. </p>
            </div>
            <div class="w-full md:w-1/3 pb-4 px-4">
                 <div class="text-center pb-4 font-sans"><i class=" icon-genius text-2xl " style="color: #a4b83b;"></i></div>
                <h5 class="text-muted text-center pb-2">JHS BOOKS</h5>
                <p class="text-center text-sm">Buy Textbooks for the various subjects like Maths, English, Social, Science, BDT, ICT etc from our shop. </p>
            </div>
        </div><!-- end of row -->


        <div class="flex flex-wrap mt-5 -mx-4">
          <div class="w-full md:w-1/3 pb-4 px-4">
                <div class="text-center pb-4 "><i class=" icon-target text-2xl " style="color: #a4b83b;"></i></div>
                <h5 class="text-muted text-center pb-2">SHS BOOKS </h5>
                <p class="text-center text-sm">Buy SHS Textbooks for the various subjects and publishers from our shop.</p>
            </div>
            <div class="w-full md:w-1/3 pb-4 px-4">
                 <div class="text-center pb-4 "><i class=" icon-anchor text-2xl  " style="color: #a4b83b;"></i></div>
                <h5 class="text-muted text-center pb-2">STORY BOOKS AND DICTIONARIES</h5>
                <p class="text-center text-sm ">Purchase Inspirational books like <span style="color: #a4b83b;">"Why they Achieve Little"</span> and other Storybooks and Dictionaries from our shop. </p>
            </div>
            <div class="w-full md:w-1/3 pb-4 px-4">
                 <div class="text-center pb-4 "><i class=" icon-beaker text-2xl " style="color: #a4b83b;"></i></div>
                <h5 class="text-muted text-center pb-2">STATIONERY</h5>
                <p class="text-center text-sm"> Buy your papers, pens, envelopes pencils etc from our shop</p>
            </div>
        </div><!-- end of row -->
</div>

</div>

@endsection



@section('footer')

    @include('partials.footer')

@endsection