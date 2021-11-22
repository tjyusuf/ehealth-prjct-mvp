@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-5 md:p-10 space-y-2">
        <!-- header -->
        <header class=" text-gray  flex flex-row">
            <h1 class="flex-grow">
                <p>Hello</p>
                <p class="text-xl font-bold ">Tijjani</p>
            </h1>      
            <div class="flex-initial">
                <i class="fa fa-bell text-gray text-2xl"></i>
            </div> 
        </header>  
        
        <x-home-explore/>

        <div>
            <p class="text-primary-dark mb-2 text-md font-bold">Upcoming appointment</p>
            <x-home-appointment-card/>
        </div>
    </div>
@endsection