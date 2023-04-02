@extends('layout.layout')
@section('title', 'UI Page')

@section('content')
    <h1>Users Page</h1>
    <div class="users-container">
        @if (count($users_data) > 0)
            @foreach ($users_data as $user)
                <a href="{{ route('users.show', ['user' => $user['id']]) }}">
                    <div class="card-user">
                        <p>User {{ $user['id'] }}</p>
                    </div>
                </a>
            @endforeach
        @else
            <p>No Data To display</p>
        @endif
    </div>

@endsection
