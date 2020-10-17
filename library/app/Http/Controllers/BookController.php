<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', ["books" => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "bookname" => "required",
            "authorname" => "required",
            "editionnumber" => "required"
        ]);
        Book::create($data);

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.update', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            "bookname" => "required",
            "authorname" => "required",
            "editionnumber" => "required"
        ]);
        $book->fill($data)->save();
        return redirect('/books/' . $book['id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }
    public function borrow()
    {
        $books = Book::whereNotNull('borrowedby')->get();
        return view('books.borrowedbooks', ["books" => $books]);
    }
    public function showallusers()
    {
        $users = User::all();
        return view('books.allusers', ["users" => $users]);
    }
    public function showuser($usernum)
    {
        $user = User::findOrFail($usernum);
        return view('books.showuser', ['user' => $user]);
    }
    public function edituser($usernum)
    {
        $user = User::findOrFail($usernum);
        return view('books.edituser', ['user' => $user]);
    }
    public function updateuser($usernum)
    {
        $user = User::findOrFail($usernum);
        $admin = request('admin');
        $user->is_admin = (int)$admin;
        $user->save();
        return redirect('/showuser/' . $usernum);
    }
    ////////////////////////////////////////////////////////////////
    public function showbooks()
    {
        $books = Book::whereNull('borrowedby')->get();
        return view('books.showbooks', ["books" => $books]);
    }
    public function borrowbook($booknum)
    {
        $book = Book::findOrFail($booknum);
        return view('books.borrow', ["book" => $book]);
    }
    public function updateborrow($booknum)
    {
        $book = Book::findOrFail($booknum);
        $date = request('date');
        $time = request('time');
        $book->returndate = $date;
        $book->returntime = $time;
        $book->borrowedby = \Auth::user()->name;
        $book->save();
        return redirect('/showbooks');
    }
    public function allborrow()
    {
        $books = Book::whereNotNull('borrowedby')->get();
        return view('books.allborrowedbooks', ["books" => $books]);
    }
    public function restore($booknum)
    {
        $book = Book::findOrFail($booknum);
        $book->returndate = null;
        $book->returntime = null;
        $book->borrowedby = null;
        $book->save();
        return redirect('/showbooks');
    }
}
