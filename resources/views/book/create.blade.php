@extends('layouts.app')
@section('content')
    <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Create New Book List</h4>
                    <hr>
                    <div class="mb-4">
                        <label class=" form-label" for="">Book Idx</label>
                        <input type="text" class=" form-control @error('book_uniq_id') is-invalid @enderror"
                            value="{{ old('book_uniq_id') }}" name="book_uniq_id" required>
                        @error('book_uniq_id')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class=" form-label" for="">Book name</label>
                        <input type="text" class=" form-control @error('book_name') is-invalid @enderror"
                            value="{{ old('book_name') }}" name="book_name" required>
                        @error('book_name')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class=" form-label" for="">Choose Image (JPEG/JPG/PNG)</label>
                        <input type="file" class=" form-control @error('cover_photo') is-invalid @enderror"
                            value="{{ old('cover_photo') }}" name="cover_photo" required>
                        @error('cover_photo')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="content_owner_name">Content Owner Name</label>
                        <input type="text" class="form-control" id="content_owner_name" name="content_owner_name"
                            required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="publisher_name">Publisher Name</label>
                        <input type="text" class="form-control" id="publisher_name" name="publisher_name" required>
                    </div>

                    <button class=" btn btn-dark mb-4">Submit</button>
                </div>
            </div>

        </div>
    </form>
@endsection
