@extends('layouts.app')

@section('content')

    <div class="flex w-full bg-primary p-5 pb-10 flex-row text-white">
        <div class="flex-grow justify-center text-center">
            <span class="text-white text-md font-semibold text-white">
                Profile
            </span>
        </div>
    </div>
    <div class="flex mx-auto w-4/5 -mt-5 bg-white shadow-md  rounded-md p-2 text-gray">
        <img alt="" class="w-12 h-12 rounded-full mr-3" src="https://source.unsplash.com/41x41/?portrait"/>
        <div class="flex-col flex-grow justify-center px-2 py-1">
            <div class="flex justify-between items-center ">
                <h2 class="text-sm font-semibold">{{ request()->user()->name }}</h2>
            </div>
            <div class="flex pt-2  text-sm">
                <div class="flex items-center mr-auto">
                    <i class="fa fa-map-marker text-md font-bold text-primary"></i>
                    <p class="primary ml-2">{{$city}}</p> 
                </div>
            </div>
        </div>
        <div class="flex flex-intiial items-center">
            <div class="flex flex-col text-center items-center">
                <span class="text-primary text-lg font-semibold fa fa-edit"></span>
            </div>          
        </div>
    </div>


    <div class="md:container md:mx-auto mx-auto p-5 md:p-7 space-y-2">

    

    </div>
@endsection