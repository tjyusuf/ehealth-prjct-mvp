<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="w-full bg-white border-b-2 border-gray-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-2 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <x-logo class=" flex-inline h-8 w-auto sm:h-10"/>
                    </a>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <div class="relative">
                    <a href="/explore" class="no-underline px-2 my-2 font-medium text-gray {{ request()->routeIs('explore') ? 'text-primary' : '' }} hover:text-primary">
                        <i class="fa fa-search"></i> Explore
                    </a>          
                    <a href="#" class="no-underline px-2 my-2 font-medium text-gray {{ request()->routeIs('appointments') ? 'text-primary' : '' }} hover:text-primary">
                        <i class="fa fa-list"></i> Appointments
                    </a>
                                        
                    </div>
                </nav>
                <div class="flex items-center justify-end md:flex-1 lg:w-0">
                    <img alt="" class="w-8 h-8 rounded-full ring-2 ring-offset-1 ring-primary ring-offset-primary-light" src="https://source.unsplash.com/41x41/?portrait" />
                </div>                    
            </div>
        </div>
    </div>    
</div>