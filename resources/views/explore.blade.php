@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-5 md:p-10 space-y-3">
       <x-explore-search/>
       <x-explore-filter/>
       <x-specialist-card/>
       <x-specialist-card/>
       <x-facility-card/>
       <x-specialist-card/>
       <x-facility-card/>
    </div>
@endsection