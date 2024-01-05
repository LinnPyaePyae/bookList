@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Book Lists</h3>
                <br>
                <div class="row">

                    <div class="ms-auto col-md-4 col-sm-6">
                        <form action="" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Search..."
                                    value="{{ request('keyword') }}">
                                @if (request()->filled('keyword'))
                                    <a href="{{ route('book.index') }}" class="btn btn-danger">
                                        <i class="bi bi-x"></i>
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-dark">Search</button>
                            </div>
                        </form>

                    </div>
                </div>
                <br><br>
                <table class=" table">
                    <thead>
                        <tr>
                            <th>Book Idx</th>
                            <th>Image</th>
                            <th>Book Name</th>
                            <th>Content Owner</th>
                            <th>Publisher</th>
                            <th>Control</th>
                            <th>Created At</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ dd($books) }} --}}
                        @forelse ($books as $book)
                            <tr class="text-center">
                                <td class="pt-5">{{ $book->book_uniq_id }}</td>
                                <td>
                                    @if (Str::startsWith($book->cover_photo, ['http://', 'https://']))
                                        <!-- Display the image using the stored HTTPS URL -->
                                        <img src="{{ $book->cover_photo }}" alt="{{ $book->book_name }}" width="100">
                                    @else
                                        <!-- Display the image using the local storage path -->
                                        <img src="{{ asset('storage/' . $book->cover_photo) }}" alt="{{ $book->book_name }}"
                                            width="100">
                                    @endif
                                </td>
                                <td class="pt-5">{{ $book->book_name }}
                                <td class="pt-5">{{ $book->contentOwner->name }}</td>
                                <td class="pt-5">{{ $book->publisher->name }}</td>
                                <td class="pt-5">
                                    <div class="btn-group">

                                        @can('book-update', $book)
                                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-outline-dark">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                        @endcan

                                        @cannot('update', $book)
                                            <button onclick="alert(`U don't have permission to do this`)"
                                                class="btn btn-sm btn-outline-dark">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        @endcannot

                                        @can('book-delete', $book)
                                            <button onclick="return confirm('Are you sure you want to delete this book?')"
                                                form="bookDeleteForm {{ $book->id }}" class=" btn btn-sm btn-outline-dark">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        @endcan

                                        @cannot('delete', $book)
                                            <button onclick="alert(`U don't have permission to do this`)"
                                                class="btn btn-sm btn-outline-dark">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        @endcannot

                                    </div>
                                </td>

                                <td class="pt-5">
                                    {{-- <p class="small mb-0 ">
                                        <i class="bi bi-clock"></i>
                                        {{ $book->created_at->format('h:i a') }} --}}

                                    {{-- </p> --}}
                                    <p class="small mb-0 ">
                                        <i class="bi bi-calendar"></i>
                                        {{ $book->created_at->format('d M Y') }}

                                    </p>
                                </td>
                            </tr>

                            <form id="bookDeleteForm {{ $book->id }}" class=" d-inline-block"
                                action="{{ route('book.destroy', $book->id) }}" method="post">
                                @method('delete')
                                @csrf

                            </form>

                        @empty
                            <tr>
                                <td colspan="7" class=" text-center">
                                    <p>
                                        There is no record
                                    </p>
                                    <a class=" btn btn-sm btn-dark" href="{{ route('book.create') }}">Create
                                        Book List</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="">
                    {{ $books->onEachSide(1)->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
