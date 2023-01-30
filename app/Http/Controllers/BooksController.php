<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $genres = Genre::all();
        $book = new Book();

        return view('book.index', compact('books', 'genres', 'book'));
    }

    public function store(Request $request)
    {
        Book::create($request->input());

//        return Redirect::back()->withInput(Input::all()); // if have exception, return with all old input

        return redirect()->back();
    }

    public function show(Book $book)
    {
        return view('book', compact('book'));
    }

    public function edit()
    {
        $book = Book::findOrFail(request()->input('id'));
        $book->update($this->validatedData());
//        dd($book->validatedData());

        return redirect('/books');

    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books');
    }

    protected function validatedData()
    {
//        dd(request());
        return request()->validate([
            'title' => 'required|min:5',
            'author' => 'required',
            'genre_id' => 'required',
            'date_written' => 'required',
            'publisher' => 'required',
            'info' => 'required|min:5|max:1250'
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');

        $books = Book::with('genre')
            ->where('title', 'LIKE', "%$search%")
            ->orWhere('author', 'LIKE', "%$search%")
            ->paginate(5);
        $genres = Genre::all();
        $book = new Book();

        if (count($books) > 0)
        {
            return view('book.index', compact('books', 'genres', 'book'));
        }
        return view('book.index', compact('books', 'genres', 'book'))->with('message', 'No results found!!!');
    }
}
