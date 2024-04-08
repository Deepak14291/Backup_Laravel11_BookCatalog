@extends('layout.app')

@section('content')

<h3>Update Book</h3>

@if ($errors->any())
@foreach ($errors->all() as $error)
<li style="color: red">
    {{$error}}
</li>
@endforeach
<br>
@endif

    <form action="{{route('books.update',['book'=>$books->id])}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="book_name">Book Name</label>
            <input type="text" name="book_name" id="book_name" value="{{ $books->book_name }}">
        </div>
        <br>
        <div>
            <label for="book_author">Book Author</label>
            <input type="text" name="book_author" id="book_author" value="{{ $books->book_author }}">
        </div>
        <br>
        <div>
            <label for="book_genre">Book Genre</label>
            <input type="text" name="book_genre" id="book_genre" value="{{ $books->book_genre }}">
        </div>
        <br>
        <div>
            <button>Update</button>
        </div>
        <br>
    </form>
    <div>Home page <a href="{{ route('books.index')}}"><button>Home</button></a></div>
@endsection