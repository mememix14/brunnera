<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Product') }}
        </h2>
    </x-slot>
    <div class="container mx-auto py-8 text-white">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold">{{ __('Product List') }}</h1>
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">{{ __('Add New Product') }}</a>
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
                    <th class="py-2 px-4 border-b text-white">{{ __('Price') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Category ID') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('SKU') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Quantity') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Weight') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Discount') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Active') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Available From') }}</th>
                    <th class="py-2 px-4 border-b text-white">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="bg-gray-700">
                        <td class="py-2 px-4 border-b text-white">{{ $product->id }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->description }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->price }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->category_id }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->sku }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->quantity }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->weight }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->discount }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->is_active ? __('Yes') : __('No') }}</td>
                        <td class="py-2 px-4 border-b text-white">{{ $product->available_from }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500">{{ __('Edit') }}</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
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
