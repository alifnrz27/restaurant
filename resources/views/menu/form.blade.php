<div class="container mx-auto p-6 bg-white shadow-md rounded-lg max-w-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ $title }}</h2>
    <form method="POST">
        @csrf
        @method($method ?? 'POST')
        @include('components.input', [
            'id' => 'name',
            'label' => 'Nama Makanan',
            'type' => 'text',
            'name' => 'name',
            'placeholder' => 'Masukkan nama makanan',
            'value' => $menu ?? null,
        ])
        @include('components.input', [
            'id' => 'stock',
            'label' => 'Jumlah Stok',
            'type' => 'text',
            'name' => 'stock',
            'placeholder' => 'Masukkan jumlah stok',
            'value' => $menu ?? null,
        ])
        @include('components.input', [
            'id' => 'price',
            'label' => 'Harga',
            'type' => 'text',
            'name' => 'price',
            'placeholder' => 'Masukkan harga',
            'value' => $menu ?? null,
        ])

        <div class="flex items-center justify-end gap-2">
            <a href="{{ route('menu.index') }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Back
            </a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>
    </form>
</div>
