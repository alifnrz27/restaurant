@extends('layouts.app')

@section('content')
    <div x-data="{sidebar:true, popupNavbar:false}" class="flex">
        @include('components.sidebar')
        <div class="min-h-screen" :class="sidebar ? 'w-10/12' : 'w-full'">
            @include('components.navbar')
            <div class="container mx-auto p-4">

                <div x-data="orderForm()" class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Form Pesanan</h2>
                    <div class="mb-4">
                        <button @click="addOrder()" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 focus:outline-none">
                            Tambah Pesanan
                        </button>
                    </div>

                    <div class="space-y-4">
                        <template x-for="(order, index) in orders" :key="index">
                            <div class="flex items-center bg-gray-50 p-4 rounded-lg shadow-sm border border-gray-200">
                                <div class="flex-1 mr-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Makanan</label>
                                    <select x-model="order.menuId" @change="updatePrice(index, $event.target.value)" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" selected>Pilih Makanan</option>
                                        <template x-for="menu in menus" :key="menu.id">
                                            <option :value="menu.id" :data-price="menu.price" x-text="menu.name"></option>
                                        </template>
                                    </select>
                                </div>
                                <div class="flex-1 mr-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                                    <input type="text" :id="'price-' + index" x-model="order.price" disabled class="w-full px-3 py-2 border rounded-md bg-gray-100 text-gray-800" />
                                </div>
                                <div class="flex-1 mr-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah</label>
                                    <input type="number" min="1" x-model="order.quantity" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                                </div>
                                <div>
                                    <button @click="deleteOrder(index)" class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </template>
                    </div>

                    <div class="mt-6 p-4 bg-gray-100 rounded-lg shadow-sm">
                        <strong class="text-lg">Total: <span x-text="formatCurrency(calculateTotal())" class="text-blue-600"></span></strong>
                    </div>
                    <div class="mt-4 w-full flex items-center justify-end gap-4">
                        <a href="{{ route('myOrder.index') }}" class="flex items-center justify-center text-white px-4 py-2 bg-red-500 hover:bg-red-600 rounded-lg font-bold">Back</a>
                        <button type="submit" class="px-4 py-2 rounded-lg text-center bg-blue-500 hover:bg-blue-600 text-white font-bold">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function orderForm() {
            return {
                menus: {!! json_encode($menus) !!}, // Mengubah $menus menjadi JSON
                orders: [],

                addOrder() {
                    this.orders.push({ menuId: null, price: '', quantity: 1 });
                },

                updatePrice(index, selectedId) {
                    let selectedMenu = this.menus.find(menu => menu.id == selectedId);
                    if (selectedMenu) {
                        this.orders[index].price = this.formatCurrency(selectedMenu.price);
                    } else {
                        console.error('Menu tidak ditemukan');
                    }
                },

                deleteOrder(index) {
                    this.orders.splice(index, 1);
                },

                calculateTotal() {
                    return this.orders.reduce((total, order) => {
                        return total + (parseInt(order.price.replace(/[^0-9]/g, '')) || 0) * (order.quantity || 0);
                    }, 0);
                },

                formatCurrency(value) {
                    return 'Rp' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                }
            };
        }
        </script>

@endsection
