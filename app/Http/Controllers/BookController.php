<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;


class BookController extends Controller
{
    //

    public function index(): View
    {
        $books = Book::orderBy('title', 'asc')->get();
        return view('books.index', compact('books'));
    }

    public function create() : View
    {
        return view('books.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'             => 'required|min:5',
            'author'            => 'required|min:5',
            'publisher'         => 'required|string', // Ubah menjadi string agar bisa menerima teks
            'publication_year'  => 'required|date_format:Y', // Format tahun, misalnya 2024
            'status'            => 'required|in:available,borrowed', // Gunakan aturan 'in' untuk memastikan nilainya
            'description'       => 'required|min:10',
        ], [
            'publication_year.date_format' => 'Tahun terbit harus dalam format tahun (misalnya 2024).',
            'status.in' => 'Status harus di antara available atau borrowed.',
        ]);

        Book::create($request->all());

        return redirect('/books');

    }

    public function show(string $id): View
    {
        //get product by ID
        $book = Book::findOrFail($id);

        //render view with book
        return view('books.show', compact('book'));
    }

    public function edit(string $id): View
    {

        
        $book = Book::findOrFail($id);
        //render view with product
        return view('books.edit', compact('book'));
        
    }

    public function update(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'title'             => 'required|min:5',
            'author'            => 'required|min:5',
            'publisher'         => 'required|string', // Ubah menjadi string agar bisa menerima teks
            'publication_year'  => 'required|date_format:Y', // Format tahun, misalnya 2024
            'status'            => 'required|in:available,borrowed', // Gunakan aturan 'in' untuk memastikan nilainya
            'description'       => 'required|min:10',
        ], [
            'publication_year.date_format' => 'Tahun terbit harus dalam format tahun (misalnya 2024).',
            'status.in' => 'Status harus di antara available atau borrowed.',
        ]);

        $book = Book::findOrFail($id);

        $book->update($request->all());

        return redirect('/books');
        
    }

    public function destroy($id): RedirectResponse
    {
       
        $book = Book::findOrFail($id);

        $book->delete();

        //redirect to index
        return redirect('/books');
    }
}
