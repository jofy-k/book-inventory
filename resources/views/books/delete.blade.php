@extends ('books.layout');

@section('content')
    <div class="container mt-5">
        <h2>Delete Book</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                <p class="card-text"><strong>ISBN:</strong> {{ $book->isbn }}</p>
                <p class="card-text"><strong>Published Year:</strong> {{ $book->published_year }}</p>
                <p class="card-text"><strong>Status:</strong> {{ $book->status }}</p>
                <form action="{{ route('books.delete', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

