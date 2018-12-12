<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Book;

class Arrival extends Model
{
    //

  protected $guarded = [];

    public function books() {

    	return $this->hasMany(Book::class);
    }
}
