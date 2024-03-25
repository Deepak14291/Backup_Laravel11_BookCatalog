@extends('layout.app')

@section('content')
    <h3>Add a new book to the catalog</h3>
    <form action="{{route('books.store')}}" method="post">
        @csrf
        <div>
            <label for="book_name">Book Name</label>
            <input type="text" name="book_name" id="book_name">
        </div>
        <br>
        <div>
            <label for="book_author">Book Author</label>
            <input type="text" name="book_author" id="book_author">
        </div>
        <br>
        <div>
            <label for="book_genre">Book Genre</label>
            <input type="text" name="book_genre" id="book_genre">
        </div>
        <br>
        <div>
            <button>Save</button>
        </div>
        <br>
    </form>
    <div>Home page <a href="{{ route('books.index')}}"><button>Home</button></a></div>
@endsection