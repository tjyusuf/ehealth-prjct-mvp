@extends('layouts.base')

@section('body')
    <div class="bg-gray-light min-h-screen">

        <x-top-navigation/>     
        @yield('content')
        
        @isset($slot)
            {{ $slot }}
        @endisset
        <x-mobile-navigation/>

    </div>
@endsection