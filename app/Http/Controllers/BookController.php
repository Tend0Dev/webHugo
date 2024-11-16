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
        $books = Book::all();

        return view('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();

        $book -> title = $request->input('title');
        $book -> isbn = $request->input('isbn');
        $book -> description = $request->input('description');
        $book -> save();

        return redirect()->route('books.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'book show - '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id); // Busca el libro por su ID

        if (!$book) {
            return redirect()->back()->with('error', 'Book not found');
        }

        return view('books.edit', compact('book')); // Retorna una vista con el libro
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return redirect()->back()->with('error', 'Book not found');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $book->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'book destroy - '.$id;
    }
}
