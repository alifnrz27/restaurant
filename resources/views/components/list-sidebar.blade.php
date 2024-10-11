<a href="{{ $route }}">
    <div class="mb-4 text-white p-2 text-[20px] w-full border-b border-white hover:rounded-lg hover:scale-110 {{ request()->is($activePattern) ? 'bg-[#219ebc] rounded-lg' : '' }} hover:bg-[#219ebc] duration-200">
        {{ $title }}
    </div>
</a>
