<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;

use Image;

class GalleryController extends Controller
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
        //


        $galleries = Gallery::paginate(10);

        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.gallery.create');
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

             'title' => 'required',

             'body' => 'required',

        ]);


        $galleries = new Gallery();

        $galleries->title = $request->title;

        $galleries->body = $request->body;

        //now on images

        $image = $request->file('image');

        $filename = time(). '.'. $image->getClientOriginalExtension();

        $location = public_path('img/'.$filename);

        Image::make($image)->save($location);

        $galleries->image = $filename;

        $galleries->save();

        return redirect()->route('gallery.index');
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

         $gallery = Gallery::find($id);

        return view('admin.gallery.show', compact('gallery'));
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

         $gallery = Gallery::find($id);

         return view('admin.gallery.edit', compact('gallery'));
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

             'title' => 'required',

             'body' => 'required',

        ]);


        $galleries =  Gallery::find($id);

        $galleries->title = $request->title;

        $galleries->body = $request->body;

        //now on images

        $image = $request->file('image');

        $filename = time(). '.'. $image->getClientOriginalExtension();

        $location = public_path('img/'.$filename);

        Image::make($image)->save($location);

        $galleries->image = $filename;

        $galleries->save();

        return redirect()->route('gallery.index');
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

        $choir = Gallery::find($id);

        $choir->delete();

        return redirect()->route('gallery.index');
    }
}
