@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-5 md:p-10">
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
    </div>
@endsection