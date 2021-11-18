@extends('layouts.app')

@section('content')
    <div>

        <p class="my-2 text-left text-md font-bold text-blue-800">Upcoming Appointments</p>
        <div class="w-full bg-blue-400 rounded-lg text-white p-5 md:px-10 ">
            <div class="flex flex-row">
            <div class="flex-initial">
                <img alt="" class="w-12 h-12 rounded-full ring-2 ring-offset-4 ring-blue-500 ring-offset-blue-100" src="https://source.unsplash.com/41x41/?portrait">
            </div>           
            <h1 class="ml-5 flex-grow">
                <p class="text-xl font-bold ">Dr Sani Ahmad</p>
                <p>Dental Specialist</p>
            </h1>      
            </div>  
            <hr class="border-blue-300 my-2"/>
            <div class="flex flex-row py-2 px-3 bg-blue-500 rounded-lg text-blue-100">
            <p class="flex-1 text-center">
                <i class="fa fa-calendar"></i> Wed, 17th Nov
            </p>
            <p class="flex-1 text-center">
                <i class="fa fa-clock"></i> 5:30pm - 6:00pm
            </p>
            </div>
        </div>    

    </div>
@endsection