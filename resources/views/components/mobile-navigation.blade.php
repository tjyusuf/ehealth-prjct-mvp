<div>
    <!-- Mobile navigation menu -->
    <div class="md:hidden fixed bottom-1 w-full p-5 px-6 flex items-center justify-between bg-white shadow-lg text-gray cursor-pointer">
        <div class="flex flex-col items-center {{ request()->routeIs('dashboard') ? 'text-primary' : '' }} transition ease-in duration-200 hover:text-primary ">
            <i class="fa fa-home"></i>
        </div>
        <div class="flex flex-col items-center {{ request()->routeIs('explore') ? 'text-primary' : '' }} transition ease-in duration-200 hover:text-primary ">
            <i class="fa fa-search"></i>
        </div>
        <div class="flex flex-col items-center  hover:text-primary">
            <div
            class="absolute bottom-5 shadow-2xl text-center flex items-center justify-center rounded-full border-4 text-xl border-gray hover:border-primary bg-primary w-20 h-20 p-2 text-white transition ease-in duration-200 ">
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