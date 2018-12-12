@extends('master')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

       <div class="flex justify-between bg-white py-3 px-4 shadow-sm">
           <div>
               <h5 ><a href="/" class="text-sm md:text-xl text-grey-darker no-underline hover:text-grey-darker hover:no-underline"> 2ndComing Bookshop</a>  </h5>
           </div>

            <div class="text-sm text-grey-dark dropdown ">
                         @if(Auth::check())
                             <img src="" alt="" class="w-8 h-8 rounded-full flex-no-shrink mr-2 shadow-sm">
                            {{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i>

                            <div class=" dropdown-content bg-white shadow-lg rounded">

                                <ul class="list-reset">
                                    <li class="border-b border-grey-lighter px-4 py-3 text-sm flex">
                                        <i class="fa fa-bell mr-2"></i> 
                                        Notification 
                                    </li>

                                    <li class="border-b border-grey-lighter px-4 py-3 text-sm flex">
                                        <a href="" class="text-grey-dark  no-underline text-sm ">
                                            <i class="fa fa-cog mr-2"></i> 
                                            Settings 
                                        </a>
                                    </li>

                                {{-- Logout  --}}
                                    <li class="px-4 py-3"> 
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="text-grey-dark  no-underline text-sm ">
                                            <i class="fa fa-sign-out mr-2"></i>
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                       </form>
                                    </li>
                                {{-- end of logout --}}

                                </ul>
                            </div>
                
                         @endif
                    </div>
       </div>

     <div class="mt-4">


               <div class="flex items-center justify-center text-muted mt-8">
                    You are logged in!
                   <h1 class="px-2 text:2xl"> Under Construction</h1>
               </div>
         
     </div>
        
               
@endsection
