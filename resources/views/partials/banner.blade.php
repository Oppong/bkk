<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -1px;">
  <ol class="carousel-indicators">
    @foreach($sliders as $slider)
      <li data-target="#carouselExampleIndicators" data-slide-to={{ $loop->index}} class="{{$loop->first ? 'active' : ''}}"></li>
    @endforeach
  </ol>

  <div class="carousel-inner">
    @foreach($sliders as $key => $slider)
    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
      <img class="d-block w-100 animated fadeIn" src="/img/{{ $slider->image}}" alt="First slide" >
        <div class="carousel-caption d-md-block">
        <h3 class=" text-center display-5 text-uppercase animated fadeInDown delay-1s"><strong>{{ $slider->title}}</strong></h3>
        <p class="text-p text-white text-center animated fadeInUp delay-1s">{{ $slider->body}}</p>
       {{-- <div class="text-left"><button class="btn btn-pill btn-sm btnn">JOIN US</button></div> --}}
      </div><!-- carousel caption -->
    </div>
    @endforeach
  </div>

</div>
