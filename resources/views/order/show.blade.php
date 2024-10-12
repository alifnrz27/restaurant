@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true, popupNavbar:false}" class="flex">
        @include('components.sidebar')
        <div class="min-h-screen" :class="sidebar ? 'w-10/12' : 'w-full'">
            @include('components.navbar')
            <div class="container mx-auto p-4">
                <div class="container mx-auto p-6 bg-white shadow-md rounded-lg max-w-3xl mt-8">
                    <h1 class="text-2xl font-bold mb-4">Daftar Pesanan</h1>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold">Tanggal: {{ date("d-m-Y", strtotime($order['date'])) }} </h2>
                        <div class="grid grid-cols-1 gap-4 mt-2">
                            @foreach ($order['menus'] as $menu)
                            <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold">{{ $menu['name'] }}</h3>
                                    <p class="text-gray-600">Jumlah: {{ $menu['quantity'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('order.index') }}" class="px-4 py-2 bg-red-500 hover:bg-red-600 rounded-lg text-white font-bold">Back</a>
                        <form action="">
                            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded-lg text-white font-bold">
                                Selesai
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
