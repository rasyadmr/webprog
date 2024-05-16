<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;

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
        return view('book.list', [
            'books' => Book::paginate(2)
        ]);
    }

    public function showDetail($id) {
        return view('book.detail', [
            'book' => Book::find($id)
        ]);
    }

    public function viewForm() {
        return view('book.create', [
            'genres' => Genre::all()
        ]);
    }

    public function store(Request $request) {
        // 1. Validation
        $validated = $request->validate([
            'genre_id' => 'required',
            'name' => 'required|max:10',
            'description' => 'required|max:50',
            'publish_date' => 'required|date|before_or_equal:today'
        ]);

        // 2. Store into database
        $book = new Book();
        $book->name = $request->name;
        $book->genre_id = $request->genre_id;
        $book->description = $request->description;
        $book->publish_date = $request->publish_date;
        $book->photo = '1.jpg';
        $book->save();


        // 3. Redirect to detail with success message
        return redirect()->route('book.detail', ['id' => $book->id])->with('success', 'Book has been created');
    }
}
