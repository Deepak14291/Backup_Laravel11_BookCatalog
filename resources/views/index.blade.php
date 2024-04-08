@extends('layout.app')

@section('styles')
<style>
    table,th,td,tr{
        border: 1px solid;
        text-align: center;
        border-collapse: collapse;
        padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;
    }
  
</style>
@endsection

@section('content')
<br>
<div>Add new book <a href="{{ route('books.create')}}"><button>Add</button></a></div>
</br>
<table class="table-auto">
    <th>Book Name</th>
    <th>Book Author</th>
    <th>Book Genre</th>
    @forelse ($books as $book)
    <tr>
        <td>{{$book->book_name}}</td>
        <td>{{$book->book_author}}</td>
        <td>{{$book->book_genre}}</td>
        <td><a href="{{route('books.edit',['book'=>$book->id])}}"><button>Update</button></a></td>
       
        <td><form action="{{route('books.destroy',['book'=>$book->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button>Delete</button>
        </form>
    </td>
    </tr>
    @empty
     <p>No books to display</p>   
    @endforelse
</table>
@endsection