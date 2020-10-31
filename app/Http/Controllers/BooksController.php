<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Book;

class BooksController extends BaseController
{
    //
    public function index(){
        return Book::all();
    }
}

