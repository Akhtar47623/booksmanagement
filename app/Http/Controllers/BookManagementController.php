<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use validate;

class BookManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('front.bookManagement.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.bookManagement.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'nullable|string',
            'published_year' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;
        $book->published_year = $request->published_year;
        $book->save();

        // Redirect or return a response as needed
        return redirect('/')->with('success', 'Book added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::where('id', $id)->first();
        return view('front.bookManagement.view', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::where('id', $id)->first();
        return view('front.bookManagement.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        // Step 2: Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'genre' => 'nullable|string',
            'published_year' => 'sometimes|required|integer|min:1900|max:' . date('Y'),
            // Add validation rules for other fields as needed
        ]);

        // Step 3: Update the fields of the model with the validated data using the update method
        $book->update([
            'title' => isset($validatedData['title']) ? $validatedData['title'] : $book->title,
            'author' => isset($validatedData['author']) ? $validatedData['author'] : $book->author,
            'genre' => isset($validatedData['genre']) ? $validatedData['genre'] : $book->genre,
            'published_year' => isset($validatedData['published_year']) ? $validatedData['published_year'] : $book->published_year,
        ]);
        return redirect('/')->with('success', 'Book Has Been Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findorFail($id);
        $book->delete();
        return redirect()->back()->with('success', 'Book Deleted successfully.');
    }
}
