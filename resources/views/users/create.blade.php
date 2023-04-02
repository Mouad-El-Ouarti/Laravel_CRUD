@extends('layout.layout')
@section('title', 'Create Page')

@section('content')
    <h1>Create User</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Fullname: </label>
            <br>
            <input id="name" type="text" name="user-fullname"   value="{{old('user-fullname')}}">
            @error('user-fullname')
                <p class="err-message">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="email">Email: </label>
            <br>
            <input id="email" type="text" name="user-email"  value="{{old('user-email')}}">
            @error('user-email')
                <p class="err-message">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="age">Age:</label>
            <br>
            <input id="age" type="text" name="user-age" value="{{old('user-age')}}">
            @error('user-age')
                <p class="err-message">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <input type="submit" value="create">
    </form>
@endsection
