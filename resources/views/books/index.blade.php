@extends('layouts.app')

@section('content')

    <h2>Books Index</h2>
    <a href="{{route('books.create')}}">add element</a>

    <ul>
        @foreach($books as $book)
            <li>{{$book->title}} - {{$book->isbn}}</li>
        @endforeach
    </ul>

@endsection
