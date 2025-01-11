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
                        <h1 class="text-2xl font-bold mb-4">Edit Customer</h1>

                        <!-- 顧客作成フォーム -->
                        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $customer->name) }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email', $customer->email) }}" class="w-full p-3 border border-gray-300 rounded-md" required>
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Phone (optional)</label>
                                <input type="text" name="phone" id="phone" value="{{ old('phone', $customer->phone) }}" class="w-full p-3 border border-gray-300 rounded-md">
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="address" class="block text-gray-700 text-sm font-semibold mb-2">Address (optional)</label>
                                <textarea name="address" id="address" rows="3" class="w-full p-3 border border-gray-300 rounded-md">{{ old('address', $customer->address) }}</textarea>
                                @error('address')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="w-full bg-blue-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-200">Update Customer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>