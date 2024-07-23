<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-row-reverse">
        <div class="flex-1 flex flex-col">
            <!-- Top Navigation -->
            <header class="bg-gray-800 dark:bg-gray-900 shadow flex justify-between items-center px-4 py-6">
                <div class="text-lg font-semibold text-gray-200">
                </div>
                <div class="relative">
                    <button class="text-gray-200 focus:outline-none" id="userMenuButton">
                        <span>{{ Auth::user()->name }}</span>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-gray-800 dark:bg-gray-900 rounded-md shadow-lg z-20 hidden" id="userMenu">
                        <a href="{{ route('admin.profile.edit') }}" class="block px-4 py-2 text-gray-200 hover:bg-gray-700">{{ __('Profile') }}</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block px-4 py-2 w-full text-right text-gray-200 hover:bg-gray-700">
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100 dark:bg-gray-800">
                {{ $slot }}
            </main>
        </div>
        <!-- Right Navigation -->
        <nav class="w-64 bg-gray-800 dark:bg-gray-900 text-white flex-shrink-0">
            <div class="p-6">
            <div class="text-lg font-semibold text-gray-200">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="h-8 w-auto">
                    </a>
                </div>
                <h2 class="text-lg font-semibold">{{ __('Dashboard') }}</h2>
                <ul class="mt-6">
                    <li class="mt-4"><a href="{{ route('users.index') }}" class="hover:underline">{{ __('Users') }}</a></li>
                    <li class="mt-4"><a href="{{ route('products.index') }}" class="hover:underline">{{ __('Products') }}</a></li>
                    <li class="mt-4"><a href="{{ route('categories.index') }}" class="hover:underline">{{ __('Categories') }}</a></li>
                    <li class="mt-4"><a href="{{ route('orders.index') }}" class="hover:underline">{{ __('Orders') }}</a></li>
                    <li class="mt-4"><a href="{{ route('addresses.index') }}" class="hover:underline">{{ __('Addresses') }}</a></li>
                    <li class="mt-4"><a href="{{ route('payments.index') }}" class="hover:underline">{{ __('Payment') }}</a></li>
                    <li class="mt-4"><a href="{{ route('deliveries.index') }}" class="hover:underline">{{ __('Delivery') }}</a></li>
                    <li class="mt-4"><a href="{{ route('reviews.index') }}" class="hover:underline">{{ __('Reviews') }}</a></li>
                    <li class="mt-4"><a href="{{ route('discount.index') }}" class="hover:underline">{{ __('Offers') }}</a></li>
                    <li class="mt-4"><a href="{{ route('notifications.index') }}" class="hover:underline">{{ __('Notifications') }}</a></li>
                </ul>
            </div>
        </nav>
    </div>
</body>

</html>
