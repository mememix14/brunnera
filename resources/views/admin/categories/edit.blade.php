<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8 text-white">
        <h1 class="text-4xl font-bold mb-4 text-white">{{ __('Edit Category') }}</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-500 text-white p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.update', $category->id) }}" method="POST" class="text-white">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-white">{{ __('Name') }}</label>
                <input type="text" name="name" id="name" class="border border-gray-300 p-2 w-full text-black" value="{{ old('name', $category->name) }}">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-white">{{ __('Description') }}</label>
                <textarea name="description" id="description" class="border border-gray-300 p-2 w-full text-black">{{ old('description', $category->description) }}</textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">{{ __('Update Category') }}</button>
            </div>
        </form>
    </div>
</x-app-layout>
