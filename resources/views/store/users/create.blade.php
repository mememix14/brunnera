@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <h1>Create New User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('users.index') }}">Back to Users</a>
@endsection
