<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Arrival;

class ArrivalController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrivals = Arrival::all();

        return view('admin.arrival.index', compact('arrivals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.arrival.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

          $request->validate([

            'book_category' => 'required'

        ]);

        $arrival = new Arrival();

        $arrival->book_category = $request->book_category;

        $arrival->save();

        return redirect()->route('arrival.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $arrival = Arrival::find($id);

         return view('admin.arrival.show', compact('arrival'));
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
        $arrival = Arrival::findOrFail($id);

         return view('admin.arrival.edit', compact('arrival'));
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
        
             $request->validate([

             'book_category' => 'required',

        ]);


        $arrival = Arrival::find($id);

        $arrival->book_category = $request->book_category;

        $arrival->save();

        return redirect()->route('arrival.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $arrival = Arrival::find($id);

         $arrival->delete();

         return redirect()->route('arrival.index');
    }
}
