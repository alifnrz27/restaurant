<div x-cloak x-show="sidebar" class="w-2/12 bg-[#023047] min-h-screen overflow-auto py-6">
    <div class="text-white text-[24px] text-center font-bold border-b border-white pb-5">
        My-Rest
    </div>
    <div class="px-4 mt-8">
        @include('components.list-sidebar', [
            'route' => route('menu.index'),
            'title' => 'Daftar Menu',
            'activePattern' => 'menu*'
        ])
        @include('components.list-sidebar', [
            'route' => route('menu.index'),
            'title' => 'Daftar Pesanan',
            'activePattern' => 'orders*'
        ])
        @include('components.list-sidebar', [
            'route' => route('menu.index'),
            'title' => 'Laporan',
            'activePattern' => 'report*'
        ])
    </div>
</div>
