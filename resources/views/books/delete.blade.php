@extends('books.layout')

@section('title', 'Delete Book')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Delete Book</h2>
            <p class="card-text"><strong>Title:</strong> {{ $book->title }}</p>
            <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
            <p class="card-text"><strong>ISBN:</strong> {{ $book->isbn }}</p>
            <p class="card-text"><strong>Published Year:</strong> {{ $book->published_year }}</p>
            <p class="card-text"><strong>Status:</strong> {{ ucfirst(str_replace('_', ' ', $book->status)) }}</p>

            <form action="{{ route('books.delete', $book->id) }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection

