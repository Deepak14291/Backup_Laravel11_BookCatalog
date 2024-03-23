<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'book_name' => 'required',
            'book_author' => 'required',
            'book_genre' => 'required'
        ]);

        $book = new Book;
        $book->book_name = $data["book_name"];
        $book->book_author = $data["book_author"];
        $book->book_genre = $data["book_genre"];
        $book->save();

        return redirect('/books')
            ->with('success', 'Book added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('update', [
            'books' => Book::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'book_name' => 'required',
            'book_author' => 'required',
            'book_genre' => 'required'
        ]);

        $book = Book::findOrFail($id);
        $book->book_name = $data["book_name"];
        $book->book_author = $data["book_author"];
        $book->book_genre = $data["book_genre"];
        $book->save();

        return redirect('/books')
            ->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')
            ->with('success', 'Book deleted successfully');
    }
}