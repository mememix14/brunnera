<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-2xl">{{ $user->name }}</h1>
                        <a href="{{ route('users.index') }}" class="text-blue-500 hover:underline">Back to Users</a>
                    </div>
                    <p class="mb-4">Email: {{ $user->email }}</p>
                    <div class="flex space-x-4">
                        <a href="{{ route('users.edit', $user->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
