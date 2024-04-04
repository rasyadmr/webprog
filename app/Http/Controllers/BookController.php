<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{
    public function showList() {
        // 1. Mengambil data dari database
        // //      a. Query builder
        // DB::table('books')->get();
        // //      b. DB raw
        // DB::raw("SELECT * FROM books");
        // //      c. Eloquent
        // Book::all();

        // 2. Passing data ke view
        return view('book.list', ['books' => Book::paginate(2)]);
    }

    public function showDetail($id) {
        return view('book.detail', ['book' => Book::find($id)] );
    }
}
