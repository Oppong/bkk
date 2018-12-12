<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name');
            $table->string('book_author');
            $table->string('book_image');
            $table->string('book_price');
            $table->text('book_summary')->nullable();
            $table->integer('arrival_id')->unsigned();
            $table->timestamps();

             $table->foreign('arrival_id')->references('id')->on('arrivals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
