<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8 text-white">
        <h1 class="text-4xl font-bold mb-4 text-white">{{ __('Edit Product') }}</h1>

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

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="text-white">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="mb-4">
                    <label for="name" class="block text-white">{{ __('Name') }}</label>
                    <input type="text" name="name" id="name" class="border border-gray-300 p-2 w-full text-black" value="{{ old('name', $product->name) }}">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-white">{{ __('Description') }}</label>
                    <textarea name="description" id="description" class="border border-gray-300 p-2 w-full text-black">{{ old('description', $product->description) }}</textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-white">{{ __('Price') }}</label>
                    <input type="text" name="price" id="price" class="border border-gray-300 p-2 w-full text-black" value="{{ old('price', $product->price) }}">
                </div>
                <div class="mb-4">
                    <label for="category_id" class="block text-white">{{ __('Category') }}</label>
                    <select name="category_id" id="category_id" class="border border-gray-300 p-2 w-full text-black">
                        <option value="">{{ __('Select Category') }}</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="sku" class="block text-white">{{ __('SKU') }}</label>
                    <input type="text" name="sku" id="sku" class="border border-gray-300 p-2 w-full text-black" value="{{ old('sku', $product->sku) }}">
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-white">{{ __('Quantity') }}</label>
                    <input type="number" name="quantity" id="quantity" class="border border-gray-300 p-2 w-full text-black" value="{{ old('quantity', $product->quantity) }}">
                </div>
                <div class="mb-4">
                    <label for="weight" class="block text-white">{{ __('Weight') }}</label>
                    <input type="text" name="weight" id="weight" class="border border-gray-300 p-2 w-full text-black" value="{{ old('weight', $product->weight) }}">
                </div>
                <div class="mb-4">
                    <label for="discount" class="block text-white">{{ __('Discount') }}</label>
                    <input type="text" name="discount" id="discount" class="border border-gray-300 p-2 w-full text-black" value="{{ old('discount', $product->discount) }}">
                </div>
                <div class="mb-4">
                    <label for="is_active" class="block text-white">{{ __('Active') }}</label>
                    <select name="is_active" id="is_active" class="border border-gray-300 p-2 w-full text-black">
                        <option value="1" {{ old('is_active', $product->is_active) == '1' ? 'selected' : '' }}>{{ __('True') }}</option>
                        <option value="0" {{ old('is_active', $product->is_active) == '0' ? 'selected' : '' }}>{{ __('False') }}</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="available_from" class="block text-white">{{ __('Available From') }}</label>
                    <input type="date" name="available_from" id="available_from" class="border border-gray-300 p-2 w-full text-black" value="{{ old('available_from', $product->available_from) }}">
                </div>
                <div class="mb-4">
                    <label for="images" class="block text-white">{{ __('Product Images') }}</label>
                    <input type="file" name="images[]" id="images" class="border border-gray-300 p-2 w-full text-black" multiple>
                </div>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">{{ __('Update Product') }}</button>
            </div>
        </form>
    </div>
</x-app-layout>
