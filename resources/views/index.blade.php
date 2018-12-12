@extends('welcome')
@section('title', ' | Hompage')



@section('content')


 <div class="flex flex-wrap mt-16 -mx-4">
        <p class=" w-full text-center text-2xl font-sans text-muted">WELCOME </p>
        <p  class=" w-full text-center text-sm font-sans text-muted px-4">Welcome to our site, Navigate to reserve books and stationery of your choice. </p>
 </div>

   <div class=" mt-5 pt-5 pb-5 -mx-4" style="background-color: #eeeeee;">
           

    <h4 class="text-muted w-full text-center font-sans pb-8 ">NEW BOOKS ARRIVALS </h4>

 <div class="container">
  
  <div class="flex flex-wrap">
    @foreach($books as $book)
    <div class="px-4 w-full md:w-1/4">
         <div class="shadow rounded-lg bg-white">
            <img class="" src="/img/{{ $book->book_image}}">
            <h5 class=" pt-3 text-center pb-1">{{  $book->book_name }}</h5>
            <p class="text-center pb-1"> <strong>By: {{  $book->book_author }} </strong></p>
            <p class="text-center"> <strong>GHS {{ $book->book_price}}</strong></p>
            
          </div>
        </div>
    @endforeach
   </div> {{-- end of flex --}}
  </div>
{{-- end of new arrivals --}}

    </div>
 </div>



 <div class="container mx-auto">
     <div class="flex flex-wrap mt-32 -mx-4">
        <p class=" w-full text-center mb-8 text-2xl font-sans text-muted">LATEST NEWS </p>

	     	 @foreach($posts as $post )
	     	    
			     	<div class=" px-4 w-full md:w-1/3 mb-8  ">
			     		<div class="shadow rounded-lg">
				     		<img src="/img/{{ $post->image }}" alt="" class="">
				     		<a href="/posts/{{ $post->id }}"><h5 class="font-sans text-muted pt-3 pb-1 pl-2 ">{{ $post->title }}</h5></a>
				     		<p class="pl-2" > <small style="color: #a4b83b;">Posted  {{ $post->created_at->diffForHumans()}} <i class="fa fa-clock-o"></i></small> </p>
				     		<div class="px-2 text-justify"><p class=" font-sans text-sm">{!! substr($post->body, 0, 200 ) !!} ...</p></div>
						     	 <div class=" flex items-center justify-between mt-4 pb-4">
						     	 	<p class="ml-4">By Admin</p>
		                             <div>
		                             	<i class="fa fa-comments text-grey-dark mr-4"></i>
							     		<i class="fa fa-bullhorn text-grey-dark mr-4"></i>
							     		<i class="fa fa-whatsapp text-grey-dark mr-4"></i>
		                             </div>
						     		
						     	 </div> {{-- flex --}}
				     	</div> {{-- shadow --}}	
			     	</div>
			   
			@endforeach
     </div>
   </div> {{-- end of container --}}

   <div class="container">
            <div class="flex flex-wrap mt-5 -mx-4">

             <h4 class="text-muted w-full text-center pb-3 mt-5 pt-5">Get in Touch </h4>
            <div class="w-full md:w-1/2 pb-3 px-4">
                <div class="text-center pb-4"><i class=" fa fa-phone " style="color: #a4b83b; font-size: 18px;"></i></div>
                <h5 class="text-muted text-center"> CONTACT US</h5>
                <p class="text-center text-sm">Contact us on +233 026-976-8163</p>
            </div>
            <div class="w-full md:w-1/2 pb-3 px-4">
                 <div class="text-center pb-4"><i class=" fa fa-envelope " style="color: #a4b83b; font-size: 18px;"></i></div>
                <h5 class="text-muted text-center"> EMAIL US </h5>
                <p class="text-center text-sm">Email us on 2ndcomingbookshop@gmail.com</p>
            </div>
        </div><!-- end of row -->

             </div>
        </div><!-- end of container -->

@endsection
