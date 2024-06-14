@extends('layouts.app')

@section('title')
    Premium | Phil-Health List    
@endsection

@section('content')
    <div class="container mx-auto px-2 py-2 flex">
        @include('includes.sidebar')
        <div class="w-3/4 py-2">
            @php
                $urlPagIbig=route('pag-ibig.index');
                $urlPremium=route('premium.index');
                $urlPhilHealth=route('phil-health.index');
                $showEntries = 10;
                $defaultSortDirection = "desc";
                $defaultSortField = "year";
            @endphp
            <header-body-content
            :url_pag_ibig="{{ json_encode($urlPagIbig) }}"
            :url_premium="{{ json_encode($urlPremium) }}"
            :url_phil_health="{{ json_encode($urlPhilHealth) }}"
            ></header-body-content>
            <page-premiums-philhealth-list
            :url_philhealth="{{ json_encode('/premium-philhealth/list') }}"
            :table_header_pagibig="{{ json_encode($data['tableHeader']) }}"
            :show_entries_default="{{ $showEntries }}"
            :default_sort_direction="{{ json_encode($defaultSortDirection) }}"
            :default_sort_field="{{ json_encode($defaultSortField) }}"
            :show_entries="{{ json_encode([10, 20, 50, 75, 100, 150]) }}"
            :year_list="{{ json_encode($data['yearList']) }}"
            ></page-premiums-philhealth-list>
        </div>
    </div>
@endsection
