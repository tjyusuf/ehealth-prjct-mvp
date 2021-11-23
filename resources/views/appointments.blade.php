@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-5 md:p-10 space-y-2">
        <x-appointments-upcoming-card/>
        <x-appointments-upcoming-card/>       
    </div>
@endsection