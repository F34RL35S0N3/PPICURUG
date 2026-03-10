@extends('layouts.contentNavbarLayout')

@section('title', 'Dashboard')

@section('vendor-style')
    <!-- ApexCharts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endsection

@section('page-script')
    <!-- Dashboard JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
<!-- Dashboard Header -->
<div class="row mb-4">
    <div class="col-12">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h4 class="mb-0">Dashboard</h4>
                <p class="mb-0 text-muted"><span id="greeting"></span>, {{ Auth::user()->name ?? 'Guest' }}</p>
            </div>
            <div>
                <button class="btn btn-primary me-2" onclick="location.reload();">
                    <i class="bx bx-refresh me-1"></i> Refresh
                </button>
                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exportModal">
                    <i class="bx bx-download me-1"></i> Export
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Cards -->
@include('_partials.dashboard-stats')

<!-- Charts and Statistics -->
@include('_partials.dashboard-chart')

<!-- Recent Calls Table -->
@include('_partials.dashboard-table')

@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection
