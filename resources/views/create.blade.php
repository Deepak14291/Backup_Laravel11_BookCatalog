@extends('layout.app')

@section('content')
    <h2>Add a new book to the catalog</h2>
    <form action="{{route('books.store')}}" method="post">
        @csrf
        <div>
            <label for="book_name">Book Name</label>
            <input type="text" name="book_name" id="book_name">
        </div>
        <div>
            <label for="book_author">Book Author</label>
            <input type="text" name="book_author" id="book_author">
        </div>
        <div>
            <label for="book_genre">Book Genre</label>
            <input type="text" name="book_genre" id="book_genre">
        </div>
        <div>
            <button>Save</button>
        </div>
    </form>
    <div>Home page:<a href="{{ route('books.index')}}"><button>Home</button></a></div>
@endsection