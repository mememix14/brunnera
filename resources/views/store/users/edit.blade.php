@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('users.index') }}">Back to Users</a>
@endsection
