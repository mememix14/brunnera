<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Category Details') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8 text-white">
        <h1 class="text-4xl font-bold mb-4 text-white">{{ $category->name }}</h1>

        <div class="mb-4">
            <label class="block text-white">{{ __('ID') }}:</label>
            <p class="border border-gray-300 p-2 w-full text-black">{{ $category->id }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-white">{{ __('Description') }}:</label>
            <p class="border border-gray-300 p-2 w-full text-black">{{ $category->description }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-white">{{ __('Created At') }}:</label>
            <p class="border border-gray-300 p-2 w-full text-black">{{ $category->created_at }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-white">{{ __('Updated At') }}:</label>
            <p class="border border-gray-300 p-2 w-full text-black">{{ $category->updated_at }}</p>
        </div>

        <div>
            <a href="{{ route('categories.edit', $category->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded">{{ __('Edit Category') }}</a>
        </div>
    </div>
</x-app-layout>
