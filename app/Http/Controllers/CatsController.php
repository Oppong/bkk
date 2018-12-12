<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CatsController extends Controller
{
    //

    public function show(Category $category) {


    	return view('catshow', compact('category'));
    }
}
