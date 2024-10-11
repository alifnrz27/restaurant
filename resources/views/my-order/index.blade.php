@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true, popupNavbar:false}" class="flex">
        @include('components.sidebar')
        <div class="min-h-screen" :class="sidebar ? 'w-10/12' : 'w-full'">
            @include('components.navbar')
            <div class="container mx-auto p-4">

                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Daftar Pesanan</h2>
                    <div>
                        <a href="{{ route('myOrder.create') }}" class="px-4 py-2 flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 rounded-lg">Pesan</a>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                        <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <tr>
                                <th class="py-3 px-6 text-left">No</th>
                                <th class="py-3 px-6 text-left">Tanggal</th>
                                <th class="py-3 px-6 text-left">Total</th>
                                <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">1</td>
                                <td class="py-3 px-6 text-left">27 April 2024</td>
                                <td class="py-3 px-6 text-left">Rp24.000</td>
                                <td class="py-3 px-6 text-center flex items-center justify-center gap-2">
                                    <a href="{{ route('myOrder.show', ['id' => 1]) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200">Detail</a>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">2</td>
                                <td class="py-3 px-6 text-left">27 Maret 2024</td>
                                <td class="py-3 px-6 text-left">Rp15.000</td>
                                <td class="py-3 px-6 text-center flex items-center justify-center gap-2">
                                    <a href="{{ route('myOrder.show', ['id' => 1]) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
