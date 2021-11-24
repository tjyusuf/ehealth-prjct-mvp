@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-5 md:p-10 space-y-3">
        
        <div class="space-y-2">
            <p class="text-primary-dark mb-2 text-md font-bold">Upcoming appointment</p>
            <x-appointments-upcoming-card/>
            <x-appointments-upcoming-card/>
        </div>
        <div class="space-y-2">
            <p class="text-primary-dark mb-2 text-md font-bold">Completed appointments</p>
            <x-appointments-completed-card/>
            <x-appointments-completed-card/>
            <x-appointments-completed-card/>
        </div>
    </div>
@endsection