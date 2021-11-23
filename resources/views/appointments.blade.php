@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-5 md:p-10 space-y-2">
        
        <div>
            <p class="text-primary-dark mb-2 text-md font-bold">Upcoming appointment</p>
            <x-appointments-upcoming-card/>
        </div>
        <div>
            <p class="text-primary-dark mb-2 text-md font-bold">Upcoming appointment</p>
            <x-appointments-upcoming-card/>
        </div>
    </div>
@endsection