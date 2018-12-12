<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Arrival;

class Book extends Model
{
    //

    protected $guarded = [];

    public function arrival() {

    	return $this->belongsTo(Arrival::class);
    }
}
