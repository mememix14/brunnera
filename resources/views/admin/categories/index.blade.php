<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="container mx-auto py-8 text-white">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold">{{ __('Category List') }}</h1>
            <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">{{ __('Add New Category') }}</a>
        </div>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-gray-800">
            <thead>
                <tr class="bg-gray-900">
                    <th class="py-2 px-4 border-b text-white">{{ __('ID') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Name') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Description') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr class="bg-gray-700">
                        <td class="py-2 px-4 border-b text-white">{{ $category->id }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $category->name }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $category->description }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500">{{ __('Edit') }}</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
