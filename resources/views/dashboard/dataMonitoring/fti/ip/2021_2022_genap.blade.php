@extends('dashboard.layouts.main')
@section('title', 'PANDAY | Mata Kuliah')
@section('content')
    <!-- Route -->
    <h5 class="fw-bold" style="margin-top: 40px; font-weight: 400;">Data Monitoring Akademik</h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('akademik') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Akademik</li>
        <li class="breadcrumb-item active">Fakultas Teknologi Informasi</li>
        <li class="breadcrumb-item active">Perpustakaan dan Sains Informasi</li>
        <li class="breadcrumb-item active">2021_2022 Genap</li>
    </ol>

    <div class="row g-3 my-3">
        <div class="col mx-2 bg-white rounded card content" id="wrapper-content">
            <div class="row g-0 my-3">
                <div class="row mb-4">
                    <h5 class="mb-2 fw-bold text">Data Monitoring Akademik</h5>
                    <span class="fs-6 mb-3 text">Semester 2021/2022 Genap - Perpustakaan dan Sains Informasi</span>
                    {{-- Table --}}
                    <div class="container mt-3">
                        @include('dashboard.layouts.table_dataMonitoring')
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/dataMonitoring/fti/ip/2021_2022_genap.js') }}"></script>

@endsection
