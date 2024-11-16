@extends('layouts.app')

@section('content')
    <h2>create book</h2>

    <form method="POST" action="{{route('books.store')}}">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="isbn" placeholder="ISBN">
        <textarea name="description" placeholder=" description"></textarea>

        <button type="submit">Save</button>
    </form>
@endsection
