@extends('layout.layout')
@section('title', 'Show Page')

@section('content')
    <h1>Show User {{$user["id"]}}</h1>
    <p>Your fullname: <b>{{$user["fullname"]}}</b></p>
    <p>Your email: <b>{{$user["email"]}}</b></p>
    <p>Your age: <b>{{$user["age"]}}</b></p>
    <p><a href="{{route('users.edit', $user["id"])}}">Edit</a></p>
    {{-- <p><a href="">Delete</a></p> --}}
    <form action="{{route('users.destroy', $user["id"])}}" method="post">
        @csrf
        @method("DELETE")
        <button type="submit">Delete</button>
    </form>
@endsection
