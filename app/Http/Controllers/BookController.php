<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'books' => Book::paginate(5)
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

    public function updateForm(Book $book) {
        return view('book.update', [
            'book' => $book,
            'genres' => Genre::all()
        ]);
    }

    public function deleteForm(Book $book) {
        return view('book.delete', [
            'book' => $book
        ]);
    }

    public function store(Request $request) {
        // 1. Validation
        $validated = $request->validate([
            'genre_id' => 'required',
            'name' => 'required|max:50',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048', 
            'description' => 'required',
            'publish_date' => 'required|date|before_or_equal:today'
        ]);

        // 2aa. Take the photo
        $photo = $request->file('photo');
        $filename = date('Y-m-d').$photo->getClientOriginalName();
        $path = 'images/cover/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($photo));

        // 2ab. Take the photo
        // $request->photo->store('[Nama folder]', '[Nama drive]') ## Template
        // $request->photo->store('/images/cover', 'public');

        // 2b. Store into database
        $book = new Book();
        $book->name = $request->name;
        $book->genre_id = $request->genre_id;
        $book->description = $request->description;
        $book->publish_date = $request->publish_date;
        $book->photo = $filename;
        $book->save();


        // 3. Redirect to detail with success message
        return redirect()->route('book.detail', ['id' => $book->id])->with('success', 'Book has been created');
    }

    public function edit(Request $request, Book $book) {
        $validated = $request->validate([
            'genre_id' => 'required',
            'name' => 'required|max:50',
            'photo' => 'mimes:png,jpg,jpeg|max:8192', 
            'description' => 'required',
            'publish_date' => 'required|date|before_or_equal:today'
        ]);

        $book->name = $request->name;
        $book->genre_id = $request->genre_id;
        $book->description = $request->description;
        $book->publish_date = $request->publish_date;

        $book->save();

        return redirect()->route('book.detail', ['id' => $book->id])->with('success', 'Book has been updated');
    }

    public function drop(Book $book) {
        $book->delete();

        return redirect()->route('book.list')->with('success', 'Book has been deleted');
    }
}
