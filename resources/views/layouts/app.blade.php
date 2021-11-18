@extends('layouts.base')

@section('body')
    <div class="bg-gray-50 min-h-screen">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="w-full bg-white border-b-2 border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                    <img class=" flex-inline h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt=""/>
                    </a>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <div class="relative">
                    <a href="#" class="no-underline px-2 my-2 font-medium text-gray-500 hover:text-blue-400">
                        <i class="fa fa-search"></i> Explore
                    </a>          
                    <a href="#" class="no-underline px-2 my-2 font-medium text-gray-500 hover:text-blue-400">
                        <i class="fa fa-list"></i> Appointments
                    </a>
                                        
                    </div>
                </nav>
                <div class="flex items-center justify-end md:flex-1 lg:w-0">
                    <i class="fa fa-bell text-blue-400 text-2xl"></i>
                </div>                    
                </div>
            </div>
        </div>         
        @yield('content')
        
        @isset($slot)
            {{ $slot }}
        @endisset


        <!-- Mobile navigation menu -->
        <div class="md:hidden fixed bottom-1 w-full p-5 px-6 flex items-center justify-between bg-white shadow-lg text-gray-500 rounded-md cursor-pointer">
            <div class="flex flex-col items-center {{ request()->routeIs('dashboard') }} transition ease-in duration-200 hover:text-blue-400 ">
                <i class="fa fa-home"></i>
            </div>
            <div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
                <i class="fa fa-search"></i>
            </div>
            <div class="flex flex-col items-center  hover:text-blue-400 ">
                <div
                class="absolute bottom-5 shadow-lg text-center flex items-center justify-center rounded-full border-4 text-lg border-gray-50 hover:border-blue-500 bg-blue-400 w-20 h-20 p-2 text-white transition ease-in duration-200 ">
                +
                <span class="animate-pingg absolute inline-flex h-full w-full rounded-full border-4 opacity-50"></span>
                </div>
            </div>
            <div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
                <i class="fa fa-bookmark"></i>
            </div>
            <div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
                <i class="fa fa-user"></i>
            </div>
        </div>        

    </div>
@endsection
