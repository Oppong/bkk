<div class="flex justify-between items-center">
    <p class="small py-2 px-2"><i class="fa fa-phone"></i> &nbsp; +233 026-976-8163</p>
  <div class="pr-4 small">
      <a href="{{ route('login') }}" class="text-dark pr-2">Login</a>
      <a href="{{ route('register') }}" class="text-dark pr-2">Register</a>
      <i class="fa fa-shopping-cart text-dark"></i>
        
  </div>
    
</div> {{-- end of flex --}}
<nav class="navbar navbar-expand-md navbar-dark " style="background-color: #4b8785;">
        <a class="navbar-brand text-white font-weight-bold" href="/">2ndComing Bookshop </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-reorder" style="color: #fff;"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <ul class="navbar-nav ml-auto links flex align-items-center">   
        <a class="p-2 text-white" href="/">Home</a>
        <a class="p-2 text-white" href="/about">About Us</a>
        <a class="p-2 text-white" href="/contact">Contact Us</a>
        <a class="p-2 text-white" href="/services">Products </a>
        <a class="p-2 text-white" href="/posts">Blog</a>
        <a class="p-2 text-white" href="/shop">Shop  </a>
        <p class="text-white small">
            @if(Auth::check())
              {{ Auth::user()->name }}
            @endif
        </p>
        
          </ul>
        </div>
 </nav>