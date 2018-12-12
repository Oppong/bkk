
@if($errors->count())	
   <ul>

 <div class="mt-4 py-2 px-2 bg-red-light text-white rounded-lg">
	@foreach($errors->all() as $error)
	
	     <li> {{ $errors}} </li>

	@endforeach
 </div>
    </ul>

@endif