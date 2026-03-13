<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'asc')->get();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => ['required', 'string', Rule::unique('books', 'isbn')],
            'published_year' => 'required|integer|min:1000|max:' . date('Y'),
            'status' => ['required', Rule::in(['available', 'checked_out', 'archived'])],
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Book created successfully!');
    }

    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => ['required', 'string', Rule::unique('books', 'isbn')->ignore($book->id)],
            'published_year' => 'required|integer|min:1000|max:' . date('Y'),
            'status' => ['required', Rule::in(['available', 'checked_out', 'archived'])],
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Display the delete confirmation page.
     */
    public function delete(Book $book)
    {
        $book = Book::findOrFail($book->id);
        $book->delete();
        return view('books.index', ['books' => Book::all()])->with('success', 'Book deleted successfully!');
    }
}
