<div x-cloak x-show="sidebar" class="w-2/12 bg-[#023047] min-h-screen overflow-auto py-6">
    <div class="text-white text-[24px] text-center font-bold border-b border-white pb-5 truncate">
        My-Rest
    </div>
    <div class="px-4 mt-8">
        @include('components.list-sidebar', [
            'route' => route('menu.index'),
            'title' => 'Daftar Menu',
            'activePattern' => 'menu*',
            'icon' => 'fas fa-bars',
        ])
        @include('components.list-sidebar', [
            'route' => route('myOrder.index'),
            'title' => 'Pesanan Saya',
            'activePattern' => 'my-orders*',
            'icon' => 'fas fa-clipboard-list',
        ])
        @include('components.list-sidebar', [
            'route' => route('menu.index'),
            'title' => 'Daftar Pesanan',
            'activePattern' => 'orders*',
            'icon' => 'fas fa-shopping-cart',
        ])
        @include('components.list-sidebar', [
            'route' => route('menu.index'),
            'title' => 'Laporan',
            'activePattern' => 'report*',
            'icon' => 'fas fa-file-alt',
        ])
    </div>
</div>
