@extends('layouts.app')

@section('title')
    Premiums | List    
@endsection

@section('content')
    <div class="container mx-auto px-2 py-2 flex">
        @include('includes.sidebar')
        <div class="w-3/4 py-2">
            @php
                $urlSSS = '/premium-sss/list';
                $showEntries = 10;
                $defaultSortDirection = "desc";
                $defaultSortField = "year";
                $urlPagIbig=route('pag-ibig.index');
                $urlPremium=route('premium.index');
                $urlPhilHealth=route('phil-health.index');
                $urlTax=route('tax.index');
            @endphp
            <header-body-content
            :url_pag_ibig="{{ json_encode($urlPagIbig) }}"
            :url_premium="{{ json_encode($urlPremium) }}"
            :url_phil_health="{{ json_encode($urlPhilHealth) }}"
            :url_tax="{{ json_encode($urlTax) }}"
            ></header-body-content>
            <page-premiums-sss-list
            :url_sss="{{ json_encode($urlSSS) }}"
            :table_header_sss="{{ json_encode($data['tableHeader']) }}"
            :show_entries_default="{{ $showEntries }}"
            :default_sort_direction="{{ json_encode($defaultSortDirection) }}"
            :default_sort_field="{{ json_encode($defaultSortField) }}"
            :show_entries="{{ json_encode([10, 20, 50, 75, 100, 150]) }}"
            :year_list="{{ json_encode($data['yearList']) }}"
            ></page-premiums-sss-list>
        </div>
    </div>
@endsection
