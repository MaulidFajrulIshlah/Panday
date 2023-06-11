@extends('dashboard.layouts.main')
@section('title', 'PANDAY | Mahasiswa')
@section('content')
    <!-- Route -->
    <h5 class="fw-bold" style="margin-top: 40px; color: #303030; font-weight: 400;">Mata Kuliah</h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Mata Kuliah</li>
    </ol>

    <div class="row g-3 my-3">
        <div class="col mx-2 bg-white rounded card content" id="wrapper-content">

            <ul class="nav nav-pills mb-2" style="margin-left: -10px">
                @foreach ($fakultas as $fakultass)
                    <li id="fakultasSelect" class="nav-item">
                        @if ($fakultass->id === 1)
                            <a href="#" class="nav-link link" aria-current="page">{{ $fakultass->nama_fakultas }}</a>
                            @elseif ($fakultass->id === 2)
                            <a href="#" class="nav-link link" aria-current="page">{{ $fakultass->nama_fakultas }}</a>
                            @elseif ($fakultass->id === 3)
                            <a href="#" class="nav-link link" aria-current="page">{{ $fakultass->nama_fakultas }}</a>
                            @elseif ($fakultass->id === 4)
                            <a href="#" class="nav-link link" aria-current="page">{{ $fakultass->nama_fakultas }}</a>
                            @elseif ($fakultass->id === 5)
                            <a href="#" class="nav-link link" aria-current="page">{{ $fakultass->nama_fakultas }}</a>
                            @elseif ($fakultass->id === 6)
                            <a href="#" class="nav-link link" aria-current="page">{{ $fakultass->nama_fakultas }}</a>
                            @elseif ($fakultass->id === 7)
                            <a href="#" class="nav-link link" aria-current="page">{{ $fakultass->nama_fakultas }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
            
            <div class="main my-3 mx-2">
                <div class="dropdown px-3">
                    <div class="form-control-wrap col-lg-4 col-sm-6">
                        <select class="form-select box-shadow" aria-label="Default select example">
                            <option value="0">-- Program Studi --</option>
                            @foreach ($prodi as $prodis)
                                @if($prodis->id_fakultas === $prodis->fakultas->id)
                                    <option value="{{ $prodis->id }}">{{ $prodis->nama_prodi }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div> <!--dropdown-->
            </div> <!--main-->

            <div class="row g-0 my-2">
                <div class="row">
                    <ul class="semester my-2">
                        <li class="link">
                            <a href="" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>2019/2020 Ganjil</a>
                        </li>
                        <li class="link">
                            <a href="" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>2019/2020 Genap</a>
                        </li>
                        <li class="link">
                            <a href="" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>2020/2021 Ganjil</a>
                        </li>
                        <li class="link">
                            <a href="" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>2020/2021 Genap</a>
                        </li>
                        <li class="link">
                            <a href="" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>2021/2022 Ganjil</a>
                        </li>
                        <li class="link">
                            <a href="" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>2021/2022 Genap</a>
                        </li>
                        <li class="link">
                            <a href="" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>2021/2022 Ganjil</a>
                        </li>
                        <li class="link">
                            <a href="" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>2021/2022 Genap</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>            
@endsection