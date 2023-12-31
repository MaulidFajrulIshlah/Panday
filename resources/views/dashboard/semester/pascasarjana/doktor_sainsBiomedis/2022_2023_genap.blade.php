@extends('dashboard.layouts.main')
@section('title', 'PANDAY | Mata Kuliah')
@section('content')
    <!-- Route -->
    <h5 class="fw-bold" style="margin-top: 40px; font-weight: 400;">Mata Kuliah</h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Mata Kuliah</li>
        <li class="breadcrumb-item active">Fakultas Pascasarjana</li>
        <li class="breadcrumb-item active">Doktor Sains Biomedis</li>
        <li class="breadcrumb-item active">2022_2023 Genap</li>
    </ol>

    <div class="row g-3 my-3">
        <div class="col mx-2 bg-white rounded card content" id="wrapper-content">

            <div class="row g-0 my-3">
                <div class="row mb-4">
                    <h5 class="mb-2 fw-bold text">Mata Kuliah</h5>
                    <span class="fs-6 mb-3 text">Semester 2022/2023 Genap - Doktor Sains Biomedis</span>

                    <div class="col-xl-4 col-md-6 col-11 col-lg-5 my-3">
                        @include('dashboard.layouts.jumlahDaftarMatkul')
                    </div>

                    <div class="container mt-4">
                        @include('dashboard.layouts.table_matkul')
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/semester/pascasarjana/doktor_sainsBiomedis/2022_2023_genap.js') }}"></script>
    
@endsection
