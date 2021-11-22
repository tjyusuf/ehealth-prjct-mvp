@extends('layouts.base')

@section('body')
    <div class="bg-gray-50 min-h-screen">

        <x-top-navigation/>     
        @yield('content')
        
        @isset($slot)
            {{ $slot }}
        @endisset
        <x-mobile-navigtion/>

    </div>
@endsection