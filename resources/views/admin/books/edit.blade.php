@extends('admin.ash')


@section('content')

<div class="flex items-center justify-center">
	
	<form action="{{route('book.update', $book->id)}}" method="POST"  class="mt-16 py-8 bg-white px-32 shadow-lg rounded-lg font-sans" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
		 {{ csrf_field() }}

	 <div class="border-b py-3 text-grey-darker mb-4 font-bold "> Update a Book </div>

           {{-- Category for blog Post --}}
     <div class="mb-6">
            <label for="arrival_id" class="block text-grey-darker text-sm font-bold mb-2">
               Book Category
            </label>
            
          <div class="relative">
             <select name="arrival_id" id="arrival_id" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm ">
                  @foreach($arrivals as $arrival)
                    <option value="{{ $arrival->id }}">{{$arrival->book_category}}</option>
                  @endforeach     
            </select>
                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                   <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
           </div>{{--  end of relative --}}
        </div>


        <div class="mb-6">
            <label for="book_name" class="block text-grey-darker text-sm font-bold mb-2">
                Book Title
            </label>

            <input type="text" placeholder="  title for the Book" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="book_name" name="book_name" value="{{ $book->book_name}}">
        </div>

         <div class="mb-6">
            <label for="book_author" class="block text-grey-darker text-sm font-bold mb-2">
                Book Author
            </label>

            <input type="text" placeholder="  Author for the Book" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="book_author" name="book_author" value="{{ $book->book_author}}">
        </div>

         <div class="mb-6">
            <label for="book_price" class="block text-grey-darker text-sm font-bold mb-2">
                Book Price
            </label>

            <input type="text" placeholder="  Price for the Book" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm " id="book_price" name="book_price" value="{{ $book->book_price}}">
        </div>

        <div class="mb-6">
            <label for="book_summary" class="block text-grey-darker text-sm font-bold mb-2">
                Summary
            </label>
             <textarea name="book_summary" id="editor" rows="15" class="appearance-none border border-grey-light rounded  py-2 px-3 w-full text-grey-darker text-sm" > {{ $book->book_summary}}</textarea>
        </div>

          <div class="mb-6">
            <label for="book_image" class="block text-grey-darker text-sm font-bold mb-2">
                Upload Image For the Book
            </label>

            <input type="file" class=" appearance-none border border-grey-light rounded-full  py-2 px-3 w-full text-grey-darker text-sm" id="book_image" name="book_image">
        </div>
		
		<div >
            <button type="submit" class="bg-teal-dark hover:bg-teal px-4 text-white text-sm py-2 rounded-full mr-16">Update Book </button>
            <a href="{{ route('book.index')}}" class="no-underline hover:underline text-sm text-grey-darker">Return to List</a>
        </div>

         @include('partials.errors')
    </form>
</div>



@endsection