@extends('admin.ash')


@section('content')


<div class="flex items-center justify-center">
	<div class="bg-white px-16 py-8 shadow-lg mt-16 rounded-lg">
		<div class="border-b py-3 text-grey-darker mb-4 font-bold "> View Book  </div>
			<p class="mb-6 text-grey-dark"> Book Category:  <span class="font-bold">{{ $book->arrival->book_category}}</span> </p>
			<p class="mb-6 text-grey-dark"> Book Name:  <span class="font-bold">{{ $book->book_name}}</span> </p>
			<p class="mb-6 text-grey-dark"> Book Author:  <span class="font-bold">{{ $book->book_author}}</span> </p>
			<p class="mb-6 text-grey-dark"> Book Price:  <span class="font-bold">{{ $book->book_price}}</span> </p>
			<p class="mb-6 text-grey-dark pb-2 "> Book Summary:  {!! $book->book_summary !!}  </p>
			<p class="mb-6 text-grey-dark pt-8 "> Book Image:  <br> <span class="font-bold"><img src="/img/{{ $book->book_image}}" alt=""></span> </p>
		   <a href="{{ route('book.index')}}" class="bg-orange hover:bg-orange-dark px-4 py-2 rounded-full no-underline hover:underline text-sm text-white">Return to List</a>
</div>


@endsection