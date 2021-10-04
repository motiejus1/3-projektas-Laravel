<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //atsakingas uz duomenu bazes irasu atvaizdavima
    {
        $authors = Author::all(); // SELECT, pasirenka visus irasus is lenteles Authors
        return view("author.index",[ "authors"=> $authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Atsakinga uz formos atvaizdavima, kuri leidzia mums prideti nauja irasa
    {
        return view("author.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // atsakinga uz duomenu paemima is formos ir irasyma i duomenu baze
    {
        $author = new Author;

        // DB stulpelio pavadinimas = $GET/$POST["author_name"] input laukelio vardas
        $author->name = $request->author_name;
        $author->surname = $request->author_surname;
        $author->username = $request->author_username;

        $author->save();//INSERT komanda i duomenu baze

        return redirect()->route("author.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author) //atsakinga uz authoriaus redagavo formos atvaizdavima
    {
        return view("author.edit", ["author"=> $author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author) //funkcija, kuri vykdo autoriaus duomenu atnaujinima DB
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
