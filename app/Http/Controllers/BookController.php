<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use App\Models\PersonModel;

class BookController extends Controller
{
    private $objPerson;
    private $objBook;

    public function __construct()
    {
        $this->objPerson = new PersonModel();
        $this->objBook = new BookModel();
    }

    public function index()
    {
        /* $book = $this->objBook->all();
        return view('index', compact('book'));  */
        $book = BookModel::all();
        return view('index', ['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //    $person = $this->objPerson->all();
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cad = $this->objBook->create([
            'title' => $request->title,
            'pages' => $request->pages,
            'price' => $request->price,
        ]);
        return redirect('books');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // ->all()->find($id)
        $book = $this->objBook->find($id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = $this->objBook->find($id);
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cad = $this->objBook->where(['id' => $id])->update([
            'title' => $request->title,
            'pages' => $request->pages,
            'price' => $request->price,
        ]);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = $this->objBook->find($id);
        $book->delete();
        return redirect('books');
    }
}
