@extends('dashboard.layouts.main')
@section('title', 'PANDAY | Akademik')
@section('content')
    <!-- Route -->
    <h5 class="fw-bold" style="margin-top: 40px; font-weight: 400;">Data Monitoring Akademik</h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Akademik</li>
        <li class="breadcrumb-item active">Fakultas Kedokteran Gigi</li>
        <li class="breadcrumb-item active">Kedokteran Gigi</li>
        <li class="breadcrumb-item active">Kurikulum 2012</li>
        <li class="breadcrumb-item active">2019_2020 Genap</li>
    </ol>

    <div class="row g-3 my-3">
        <div class="col mx-2 bg-white rounded card content" id="wrapper-content">

            <div class="row g-0 my-3">
                <div class="row mb-4">
                    <h5 class="mb-2 fw-bold text">Data Monitoring Akademik</h5>
                    <span class="fs-6 mb-3 text">Semester 2019/2020 Genap - Kedokteran Gigi</span>
                    {{-- Table --}}
                    <div class="container mt-3">
                        @include('dashboard.layouts.table_dataMonitoring')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dataMonitoring/fkg/kedokteranGigi/kurikulum2012/2019_2020_genap.js') }}"></script>

@endsection
