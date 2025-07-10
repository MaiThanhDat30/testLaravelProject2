<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // lấy toàn bộ sách
        return view('index', compact('books'));
    }
}
