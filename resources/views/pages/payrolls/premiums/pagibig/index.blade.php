@extends('layouts.app')

@section('title')
    Premium | Pagibig List    
@endsection

@section('content')
    <div class="container mx-auto px-2 py-2 flex">
        @include('includes.sidebar')
        <div class="w-3/4 py-2">
            @php
                $urlPagIbig=route('pag-ibig.index');
                $urlPremium=route('premium.index');
                $urlPhilHealth=route('phil-health.index');
                $urlTax=route('tax.index');
                $showEntries = 10;
                $defaultSortDirection = "desc";
                $defaultSortField = "year";
            @endphp
            <header-body-content
            :url_pag_ibig="{{ json_encode($urlPagIbig) }}"
            :url_premium="{{ json_encode($urlPremium) }}"
            :url_phil_health="{{ json_encode($urlPhilHealth) }}"
            :url_tax="{{ json_encode($urlTax) }}"
            ></header-body-content>
            <page-premiums-pagibig-list
            :data="{{ json_encode($data) }}"
            ></page-premiums-pagibig-list>
        </div>
    </div>
@endsection
