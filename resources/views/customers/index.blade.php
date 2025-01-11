<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto">
                        <h1 class="text-2xl font-bold mb-4">Customer List</h1>
                        
                        <!-- 新規作成ボタン -->
                        <a href="{{ route('customers.create') }}" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-200 mb-6">
                            Create New Customer
                        </a>

                        <!-- 顧客情報リスト -->
                        <div class="space-y-4">
                            @forelse ($customers as $customer)
                                <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                                    <h3 class="text-xl font-semibold">{{ $customer->name }}</h3>
                                    <p class="text-gray-600">Email: {{ $customer->email }}</p>
                                    <p class="text-gray-600">Phone: {{ $customer->phone ?? 'N/A' }}</p>
                                    <p class="text-gray-600">Address: {{ $customer->address ?? 'N/A' }}</p>

                                    <!-- Edit ボタン -->
                                    <a href="{{ route('customers.edit', $customer->id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                </div>
                            @empty
                                <p>No customers found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>