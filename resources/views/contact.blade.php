@extends('master1')
@section('title', ' | Contact page')


@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 animated fadeIn" src="/img/contact.jpg" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s"><strong>Contact Us </strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s"> For any questions and inquiries, Email or Call us. We would be glad to answer.   </p>
       {{-- <div class="text-left"><button class="btn btn-pill btn-sm btnn">JOIN US</button></div> --}}
      </div><!-- carousel caption -->
    </div>
  </div>

</div>

<div class="container ">
     <div class="row mt-5">

			<div class="col-md-6 col-12 pb-5">
                <h5 class="text-muted" >GET <span style=" color: #a4b83b;">IN TOUCH</span></h5>
                <address class="text-dark">2ND COMING BOOKSHOP</address>
                  
                  <address class="text-dark"> <i class="icon-map" style=" color:#a4b83b; font-size: 16px;">&nbsp; </i> Opposite Blue Kiosk, Kasoa Adam Nana </address>
                  
                  <address class="text-dark"> <i class="icon-mobile" style=" color:#a4b83b; font-size: 16px;"> &nbsp; </i>Telephone:+2330269768163 </address> 

                  <address class="text-dark"><i class="icon-envelope" style=" color:#a4b83b; font-size: 16px;"> &nbsp; </i>2ndcomingbookshop@gmail.com</address> 
                  <address class="text-dark"><i class="icon-global" style=" color:#a4b83b; font-size: 16px;"> &nbsp; </i> www.2ndcomingbookshop.com</address>
          </div><!--end of col -->


          <div class="col-md-6  col-12 pb-2">
               <h5 class="text-muted">SEND US <span style=" color: #a4b83b;"> A MESSAGE </span></h5>
                  <form action="/contact" method="POST">
                       <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="eg. Amponsah">
                       </div>

                       <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="eg. info@example.com" id="email">
                       </div>

                       <div class="form-group">
                          <label for="subject">Subject</label>
                          <input type="text" name="subject" class="form-control" id="subject">
                       </div>

                       <div class="form-group">
                          <label for="message">Mesage</label>
                          <textarea class="form-control" name="body" id="message"></textarea>
                       </div>

                       <div class="form-group">
                          <button class="btn btn-pill btn-outline-secondary">Submit</button>
                       </div>

                  </form>
             </div>


   </div><!-- end of row -->
 </div>

@endsection



@section('footer')

    @include('partials.footer')

@endsection