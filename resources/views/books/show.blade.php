@extends('books.layout')

@section('content')

    <div class="container mt-5">
        <h2>Book Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $book->title }}</h5>
                <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                <p class="card-text"><strong>ISBN:</strong> {{ $book->isbn }}</p>
                <p class="card-text"><strong>Published Year:</strong> {{ $book->published_year }}</p>
                <p class="card-text"><strong>Status:</strong> {{ $book->status }}</p>
                <a href="{{ route('books.delete', $book->id) }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection