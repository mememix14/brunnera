<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl mb-4">Users</h1>
                    <a href="{{ route('users.create') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Create New User</a>
                    <table class="min-w-full bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">{{ __('ID') }}</th>
                                <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">{{ __('Name') }}</th>
                                <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">{{ __('Email') }}</th>
                                <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">{{ __('Role') }}</th>
                                <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $user->id }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $user->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $user->email }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $user->roles[0]->name}}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">
                                        <a href="{{ route('users.show', $user->id) }}" class="text-blue-500 hover:underline">View</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500 hover:underline ml-2">Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
