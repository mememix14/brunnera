<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-counter-card title="{{ __('Users') }}" icon="fas fa-box" count="{{ $users }}" color="bg-blue-500" />
                <x-counter-card title="{{ __('Products') }}" icon="fas fa-box" count="{{ $products }}" color="bg-blue-500" />
                <x-counter-card title="{{ __('Categories') }}" icon="fas fa-tags" count="{{ $categories }}" color="bg-green-500" />
                <x-counter-card title="{{ __('Orders') }}" icon="fas fa-shopping-cart" count="{{ $orders }}" color="bg-red-500" />
                <x-counter-card title="{{ __('Addresses') }}" icon="fas fa-map-marker-alt" count="{{ $addresses }}" color="bg-yellow-500" />
                <x-counter-card title="{{ __('Payment') }}" icon="fas fa-credit-card" count="{{ $payments }}" color="bg-purple-500" />
                <x-counter-card title="{{ __('Delivery') }}" icon="fas fa-truck" count="{{ $deliveries }}" color="bg-indigo-500" />
                <x-counter-card title="{{ __('Reviews') }}" icon="fas fa-star" count="{{ $reviews }}" color="bg-pink-500" />
                <x-counter-card title="{{ __('Offers') }}" icon="fas fa-percent" count="{{ $offers }}" color="bg-teal-500" />
                <x-counter-card title="{{ __('Notifications') }}" icon="fas fa-bell" count="{{ $notifications }}" color="bg-orange-500" />
            </div>
        </div>
    </div>
</x-app-layout>
