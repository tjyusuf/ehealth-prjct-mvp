<div>
    <!-- Mobile navigation menu -->
    <div class="md:hidden fixed bottom-1 w-full p-5 px-6 flex items-center justify-between bg-white shadow-lg text-gray cursor-pointer">
        <div class="flex flex-col items-center {{ request()->routeIs('dashboard') ? 'text-primary' : '' }} transition ease-in duration-200 hover:text-primary ">
            <a href="/dashboard">
                <i class="fa fa-home"></i>
            </a>    
        </div>
        <div class="flex flex-col items-center {{ request()->routeIs('explore') ? 'text-primary' : '' }} transition ease-in duration-200 hover:text-primary ">
            <a href="/explore">
                <i class="fa fa-search"></i>
            </a>
        </div>
        <div class="flex flex-col items-center ">
            <div
            class="absolute bottom-5 shadow-md text-center flex items-center justify-center rounded-full border border-gray-light text-2xl bg-primary w-14 h-14 p-2 text-white hover:font-semibold transition ease-in duration-200 ">
            +
            <span class="animate-pingg absolute inline-flex h-full w-full rounded-full border-4 opacity-50"></span>
            </div>
        </div>
        <div class="flex flex-col items-center {{ request()->routeIs('appointments') ? 'text-primary' : '' }} transition ease-in duration-200 hover:text-primary ">
            <i class="fa fa-bookmark"></i>
        </div>
        <div class="flex flex-col items-center {{ request()->routeIs('profile') ? 'text-primary' : '' }} transition ease-in duration-200 hover:text-primary ">
            <i class="fa fa-user"></i>
        </div>
    </div>    
</div>