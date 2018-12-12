@extends('master1')
@section('title', ' | About page')


@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/about.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s"><strong> About Us </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s s"> The Book shop is dedicated to provide books and stationery at affordable prices to students from Pre-School to the Tertiary Level </p>
      </div><!-- carousel caption -->
    </div>
  </div>

</div>


	<div class="container">

     <div class="flex flex-wrap mt-5">
        <h4 class="text-muted w-full text-center pb-16">About Us</h4>
            <div class="w-full pb-4 md:w-1/3 ">
                <div class="text-center pb-4 font-sans"><i class=" icon-linegraph text-2xl " style="color: #a4b83b; "></i></div>
                <h5 class="text-muted text-center pb-2">WHO WE ARE</h5>
                <p class="text-center text-sm">A Book Shop established to provide books and stationery items at affordable prices to students from Pre-School to Tertiary Level within Kasoa and beyond </p>
            </div>
            <div class="w-full md:w-1/3 pb-4">
                <div class="text-center pb-4 font-sans"><i class=" icon-globe text-2xl  " style="color: #a4b83b;"></i></div>
                <h5 class="text-muted text-center pb-2">WHY WE EXIST</h5>
                <p class="text-center text-sm">To provide customers with good and affordable books and stationery items. Any one can join us to reserve a book to be picked up at the business premises.</p>
            </div>
            <div class="w-full md:w-1/3 pb-4">
                 <div class="text-center pb-4 font-sans"><i class=" icon-genius text-2xl " style="color: #a4b83b;"></i></div>
                <h5 class="text-muted text-center pb-2">WHAT WE OFFER </h5>
                <p class="text-center text-sm">We offer Pre-School, Primary, JHS, SHS and Tertiary textbooks, Dictionaries, Storybooks, flat file, Teacher's Notebook, Exercise books etc for sale.  </p>
            </div>
        </div><!-- end of flex -->

</div>



@endsection



@section('footer')

    @include('partials.footer')

@endsection