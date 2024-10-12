@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true, popupNavbar:false}" class="flex">
        @include('components.sidebar')
        <div class="min-h-screen" :class="sidebar ? 'w-10/12' : 'w-full'">
            @include('components.navbar')
            <div class="container mx-auto p-4">

                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Daftar Order</h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                        <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <tr>
                                <th class="py-3 px-6 text-left">No</th>
                                <th class="py-3 px-6 text-left">Nama</th>
                                <th class="py-3 px-6 text-left">Total</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">1</td>
                                <td class="py-3 px-6 text-left">Mukidi</td>
                                <td class="py-3 px-6 text-left">Rp24.000</td>
                                <td class="py-3 px-6">
                                    <div class="w-full flex items-center justify-center">
                                        <div class="px-4 py-2 rounded-lg text-white bg-green-500 w-fit">
                                            Selesai
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center flex items-center justify-center gap-2">
                                    <a href="{{ route('order.show', ['id' => 1]) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200">Detail</a>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">2</td>
                                <td class="py-3 px-6 text-left">Samsudin</td>
                                <td class="py-3 px-6 text-left">Rp15.000</td>
                                <td class="py-3 px-6">
                                    <div class="w-full flex items-center justify-center">
                                        <div class="px-4 py-2 rounded-lg text-white bg-yellow-500 w-fit">
                                            Progress
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center flex items-center justify-center gap-2">
                                    <a href="{{ route('order.show', ['id' => 1]) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
