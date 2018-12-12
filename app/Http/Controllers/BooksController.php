<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use App\Arrival;

use Image;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $arrivals = Arrival::all();

        $books = Book::paginate(10);

        return view('admin.books.index', compact('arrivals', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $request->validate([

            'book_name' => 'required',
            'book_author' => 'required',
            'book_price' => 'required',
            'book_summary' => 'required',
            'arrival_id' => 'required|integer'
        ]);


        $books = new Book;

        $books->book_name = $request->book_name;
        $books->book_author = $request->book_author;
        $books->book_author = $request->book_author;
        $books->book_price = $request->book_price;
        $books->book_price = $request->book_price;
        $books->book_summary = $request->book_summary;
        $books->arrival_id = $request->arrival_id;

        //now on image

        $image = $request->file('book_image');

        $filename = time(). '.'. $image->getClientOriginalExtension();

        $location = public_path('img/'.$filename);

        Image::make($image)->resize(380, 250)->save($location);

        $books->book_image = $filename;

        $books->save();


        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $book = Book::find($id);

         $arrivals =Arrival::all();

         return view('admin.books.edit', compact('book', 'arrivals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $request->validate([

            'book_name' => 'required',
            'book_author' => 'required',
            'book_price' => 'required',
            'book_summary' => 'required',
            'arrival_id' => 'required|integer'
        ]);


        $books = Book::find($id);

        $books->book_name = $request->book_name;
        $books->book_author = $request->book_author;
        $books->book_author = $request->book_author;
        $books->book_price = $request->book_price;
        $books->book_price = $request->book_price;
        $books->book_summary = $request->book_summary;
        $books->arrival_id = $request->arrival_id;

        //now on image

        $image = $request->file('book_image');

        $filename = time(). '.'. $image->getClientOriginalExtension();

        $location = public_path('img/'.$filename);

        Image::make($image)->resize(380, 250)->save($location);

        $books->book_image = $filename;

        $books->save();


        return redirect()->route('books.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $book = Book::find($id);

        $book->delete();

        return redirect()->route('books.index');
    }
}
