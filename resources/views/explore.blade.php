@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-5 md:p-10 space-y-2">
       <x-explore-search/>
       <x-explore-filter/>
    </div>
@endsection