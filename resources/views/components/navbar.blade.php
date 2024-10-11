<nav class="bg-white w-full p-4 flex items-center justify-end shadow-lg">
    <div class="relative">
        <div class="flex items-center gap-4">
            <div class="max-w-[150px]">
                <div class="font-bold text-[20px] truncate">
                    Nurdin dfes fsfsdfsdfsdf sdsd d f fsd f
                </div>
                <div class="text-[12px] text-gray-400">
                    Pelanggan
                </div>
            </div>
            <img @click="popupNavbar=!popupNavbar" src="{{ asset('asset/img/blank-profile.png') }}" class="w-[50px] rounded-full shadow-lg cursor-pointer" alt="">
        </div>
        <div x-cloak x-show="popupNavbar" class="absolute w-[200px] p-4 bg-white rounded-lg shadow-lg top-[50px] right-[20px]">
            <a href="#">
                <div class="w-full py-2 hover:scale-110 border-b border-gray-400 duration-200">
                    <div class="text-gray-500">My Profile</div>
                </div>
            </a>
            <a href="#">
                <div class="w-full py-2 hover:scale-110 border-b border-gray-400 duration-200">
                    <div class="text-gray-500">Settings</div>
                </div>
            </a>
            <a href="#" class="flex justify-center items-center bg-red-500 text-white px-4 py-2 rounded-lg mt-4">Logout</a>
        </div>
    </div>
</nav>
