@extends('layout.layout')
@section('title', 'Edit Page')

@section('content')
    <h1>Edit User</h1>

    <form action="{{route('users.update', $user->id)}}" method="post">
        @csrf
        @method("PUT")
        <div>
            <label for="name">Fullname: </label>
            <br>
            <input id="name" type="text" name="user-fullname" value="{{ $user->fullname }}">
            @error('user-fullname')
                <p class="err-message">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="email">Email: </label>
            <br>
            <input id="email" type="text" name="user-email" value="{{ $user->email }}">
            @error('user-email')
                <p class="err-message">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <div>
            <label for="age">Age:</label>
            <br>
            <input id="age" type="text" name="user-age" value="{{ $user->age }}">
            @error('user-age')
                <p class="err-message">{{ $message }}</p>
            @enderror
        </div>
        <br>
        <input type="submit" value="Update user">
    </form>
@endsection
