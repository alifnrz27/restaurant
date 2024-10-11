@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true, popupNavbar:false}" class="flex">
        @include('components.sidebar')
        <div class="min-h-screen" :class="sidebar ? 'w-10/12' : 'w-full'">
            @include('components.navbar')
            <div class="container mx-auto p-4">
                <div class="container mx-auto p-6 bg-white shadow-md rounded-lg max-w-3xl mt-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Detail Menu Makanan</h2>

                    <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                        <div class="mb-4">
                            <h3 class="text-xl font-bold text-gray-700">Nama Makanan:</h3>
                            <p class="text-gray-600">Nasi Goreng Spesial</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="text-xl font-bold text-gray-700">Stock:</h3>
                            <p class="text-gray-600">50 porsi</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="text-xl font-bold text-gray-700">Harga:</h3>
                            <p class="text-gray-600">Rp 20.000</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <a href="{{ route('menu.index') }}" class="bg-red-500 hover:bg-red-600 text-white text-sm font-bold py-2 px-4 rounded mr-2">Back</a>
                            </div>
                            <div class="flex justify-end">
                                <a href="{{ route('menu.edit', ['id' => 1]) }}" class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-bold py-2 px-4 rounded mr-2">Edit</a>
                                <button class="bg-red-500 hover:bg-red-600 text-white text-sm font-bold py-2 px-4 rounded">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
