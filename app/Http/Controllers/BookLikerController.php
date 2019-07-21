<?php

namespace App\Http\Controllers;

use App\BookLiker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookLikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $book = new BookLiker([
            'liker_id'=> Auth::user()->id,
            'book_id'=> $request->get('book_id'),
        ]);

        $book->save();
        return back()->with('success','You Liked the book successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookLiker  $bookLiker
     * @return \Illuminate\Http\Response
     */
    public function show(BookLiker $bookLiker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookLiker  $bookLiker
     * @return \Illuminate\Http\Response
     */
    public function edit(BookLiker $bookLiker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookLiker  $bookLiker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookLiker $bookLiker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookLiker  $bookLiker
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookLiker $bookLiker)
    {
        //
    }
}
