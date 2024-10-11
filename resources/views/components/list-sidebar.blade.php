<a href="{{ $route }}">
    <div class="flex gap-4 md:gap-0 mb-4 text-white p-2 text-[20px] w-full border-b border-white hover:rounded-lg hover:scale-110 {{ request()->is($activePattern) ? 'bg-[#219ebc] rounded-lg' : '' }} hover:bg-[#219ebc] duration-200">
        <div class="w-full md:w-2/12 flex md:justify-start justify-center items-center">
            <i class="{{ $icon }} w-[20px]"></i>
        </div>
        <div class="hidden md:block">
            {{ $title }}
        </div>
    </div>
</a>
