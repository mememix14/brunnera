<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('users.index') }}">Users</a>
        <a href="{{ route('products.index') }}">Products</a>
        <a href="{{ route('categories.index') }}">Categories</a>
        <!-- Add more navigation links as needed -->
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
