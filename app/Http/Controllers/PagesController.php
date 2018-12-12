<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use App\Book;

use App\Arrival;

use App\Post;

class PagesController extends Controller
{
    public function index() {

    	$sliders = Slider::all();

    	$books = Book::latest()->take(8)->get();

    	$arrivals = Arrival::all();

        $posts = Post::latest()->take(3)->get(); 

    	return view('index', compact('sliders', 'books', 'arrivals', 'posts'));
    }

    public function about() {

    	$sliders = Slider::all();

    	return view('about', compact('sliders'));
    }

    public function contact() {

    	$sliders = Slider::all();

    	return view('contact', compact('sliders'));
    }

    public function services() {

    	$sliders = Slider::all();

    	return view('services', compact('sliders'));
    }

     public function shop() {

    	$sliders = Slider::all();

    	$arrivals = Arrival::all();

        $books = Book::take(8)->inRandomOrder()->take(12)->get();

    	return view('shop', compact('sliders', 'arrivals', 'books'));
    }

    public function showbook(Arrival $arrival) {

    	$sliders = Slider::all();

    	return view('showbook', compact('arrival', 'sliders'));
    }
}
