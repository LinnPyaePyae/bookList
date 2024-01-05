<?php

namespace App\Http\Controllers;

use App\Models\Tbl_Book;
use App\Http\Requests\StoreTbl_BookRequest;
use App\Http\Requests\UpdateTbl_BookRequest;
use App\Models\Content_Owner;
use App\Models\Publisher;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Gate;

class TblBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Tbl_Book::when(request()->has("keyword"), function ($query) {
            $query->where(function (Builder $builder) {
                $keyword = request()->keyword;

                $builder->where("book_name", "LIKE", "%" . $keyword . "%")
                    ->orWhereHas('Publisher', function ($q) use ($keyword) {
                        $q->where('name', "LIKE", "%" . $keyword . "%");
                    })
                    ->orWhereHas('ContentOwner', function ($q) use ($keyword) {
                        $q->where('name', "LIKE", "%" . $keyword . "%");
                    });
            });
        })
            ->paginate(5)
            ->withQueryString();

        return view('book.index', compact('books'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTbl_BookRequest $request)
    {
        if ($request->hasFile('cover_photo') && $request->file('cover_photo')->isValid()) {
            $cover_photo = $request->file('cover_photo');

            // Store the uploaded image in storage (you might want to customize the storage path)
            $path = $cover_photo->store('images', 'public');

            // Check if the content owner exists, if not, create a new one
            $contentOwner = Content_Owner::firstOrCreate(['name' => $request->input('content_owner_name')]);

            // Check if the publisher exists, if not, create a new one
            $publisher = Publisher::firstOrCreate(['name' => $request->input('publisher_name')]);

            // Create the book and associate it with the content owner and publisher
            $book = new Tbl_Book();
            $book->book_uniq_id = $request->input('book_uniq_id');
            $book->book_name = $request->input('book_name');
            $book->cover_photo = $path; // Assign the file path to the cover_photo attribute
            $book->user_id = auth()->id();
            $book->co_id = $contentOwner->id;
            $book->publisher_id = $publisher->id;
            // Any other fields and validations you might have

            $book->save();

            return redirect()->route('book.index')->with('status', 'Book ' . $book->book_name . " is created");
        }

        return redirect()->back()->with('error', 'Failed to upload image.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Tbl_Book $tbl_Book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tbl_Book $tbl_Book)
    {
        // $this->authorize('update', $tbl_Book);
        return view('book.edit', compact('tbl_Book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTbl_BookRequest $request, Tbl_Book $tbl_Book)
    {

        $this->authorize('update', $tbl_Book);

        // Update the book attributes
        // Check if the content owner exists, if not, create a new one
        $contentOwner = Content_Owner::firstOrCreate(['name' => $request->input('content_owner_name')]);

        // Check if the publisher exists, if not, create a new one
        $publisher = Publisher::firstOrCreate(['name' => $request->input('publisher_name')]);
        $tbl_Book->book_uniq_id = $request->input('book_uniq_id');
        $tbl_Book->book_name = $request->input('book_name');
        $tbl_Book->co_id = $contentOwner->id;
        $tbl_Book->publisher_id = $publisher->id;

        // Handle cover photo update (if provided in the request)
        if ($request->hasFile('cover_photo') && $request->file('cover_photo')->isValid()) {
            $cover_photo = $request->file('cover_photo');
            $path = $cover_photo->store('images', 'public');
            $tbl_Book->cover_photo = $path;
        }

        // Save the updated tbl_Book
        $tbl_Book->save();
        return redirect()->route('book.index')->with('status', "Book " . $tbl_Book->book_name . " is updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tbl_Book $tbl_Book)
    {

        $this->authorize('delete', $tbl_Book);

        // User is authorized, proceed with deletion
        $tbl_Book->delete();

        return redirect()->route('book.index')->with('status', 'Book ' . $tbl_Book->book_name . ' is deleted successfully');
    }

    // for Book List json api
    public function bookList()
    {
        $bookLists = Tbl_Book::when(request()->has("keyword"), function ($query) {
            return $query->where(function (Builder $builder) {
                $keyword = request()->keyword;

                $builder->where("book_name", "LIKE", "%" . $keyword . "%")
                    ->orWhereHas('Publisher', function ($q) use ($keyword) {
                        $q->where('name', "LIKE", "%" . $keyword . "%");
                    })
                    ->orWhereHas('ContentOwner', function ($q) use ($keyword) {
                        $q->where('name', "LIKE", "%" . $keyword . "%");
                    });
            });
        })
            ->paginate(5)
            ->withQueryString();

        return response()->json([
            "bookLists" => $bookLists
        ], 200);
    }
}
