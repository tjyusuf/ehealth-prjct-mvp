@extends('layouts.base')

@section('body')
    <div class="bg-gray-50 min-h-screen pb-14 md:pb-5">

        <x-top-navigation/>     
        @yield('content')
        
        @isset($slot)
            {{ $slot }}
        @endisset

        <x-mobile-navigation/>
    </div>
@endsection