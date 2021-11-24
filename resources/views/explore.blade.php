@extends('layouts.app')

@section('content')
    <div class="md:container md:mx-auto mx-auto p-5 md:p-7 space-y-2">
       <x-explore-search/>
       <x-explore-filter/>
       <x-specialist-card/>
       <x-specialist-card/>
       <x-facility-card/>
       <x-specialist-card/>
       <x-facility-card/>
    </div>
@endsection