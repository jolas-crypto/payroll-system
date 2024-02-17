@extends('layouts.app')

@section('title')
    Premiums | List    
@endsection

@section('content')
    <div class="container mx-auto px-2 py-2 flex">
        @include('includes.sidebar')
        <div class="w-3/5 py-2">
            <header-body-content
            />
        </div>
    </div>
@endsection
