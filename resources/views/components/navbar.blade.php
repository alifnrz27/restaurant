<nav class="bg-white w-full p-4 flex items-center justify-end shadow-lg">
    <div class="relative flex items-center justify-between w-full">
        <div @click="sidebar=!sidebar" class="cursor-pointer p-2 bg-gray-200 rounded-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="4" width="24" height="2" fill="#000000"/>
                <rect y="11" width="24" height="2" fill="#000000"/>
                <rect y="18" width="24" height="2" fill="#000000"/>
            </svg>

        </div>
        <div class="flex items-center gap-4">
            <div class="max-w-[150px]">
                <div class="font-bold text-[20px] truncate">
                    Nurdin Testing
                </div>
                <div class="text-[12px] text-gray-400">
                    Pelanggan
                </div>
            </div>
            <img @click="popupNavbar=!popupNavbar" src="{{ asset('asset/img/blank-profile.png') }}" class="w-[50px] rounded-full shadow-lg cursor-pointer" alt="">
        </div>
        <div x-cloak @click.outside="popupNavbar=!popupNavbar" x-show="popupNavbar" class="absolute w-[200px] p-4 bg-white rounded-lg shadow-lg top-[50px] right-[20px]">
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
