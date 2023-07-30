@extends('dashboard.layouts.main')
@section('title', 'PANDAY | Mata Kuliah')
@section('content')
    <!-- Route -->
    <h5 class="fw-bold" style="margin-top: 40px; font-weight: 400;">Data Monitoring Akademik</h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('akademik') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Monitoring Akademik</li>
        <li class="breadcrumb-item active">Fakultas Ekonomi dan Bisnis</li>
        <li class="breadcrumb-item active">Manajemen</li>
        <li class="breadcrumb-item active">Kurikulum 2012</li>
    </ol>

    <div class="row g-3 my-3">
        <div class="col mx-2 bg-white rounded card content" id="wrapper-content">

            <div class="row g-0 my-3">
                <div class="row mb-4">
                    <h5 class="mb-2 fw-bold text">Data Monitoring Akademik</h5>
                    <span class="fs-6 mb-3 text">Kurikulum 2012 - Manajemen</span>

                    <div class="container mt-4">
                        <table id="data-matkul" class="table table-bordered table-hover cell-border">
                            <thead class="table-success">
                                <tr>
                                    <th rowspan="2" scope="col" class="text" style="text-align: center;">No</th>
                                    <th rowspan="2" scope="col" class="text" style="text-align: center;">Nama Mata Kuliah</th>
                                    <th colspan="2" scope="col" class="text" style="text-align: center;">Pengumpulan</th>
                                    <th colspan="14" scope="col" class="text merged-cell" style="text-align: center;">Kegiatan Belajar</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;">Tugas</th>
                                    <th style="text-align: center;">Kuis</th>
                                    <th style="text-align: center;">P1</th>
                                    <th style="text-align: center;">P2</th>
                                    <th style="text-align: center;">P3</th>
                                    <th style="text-align: center;">P4</th>
                                    <th style="text-align: center;">P5</th>
                                    <th style="text-align: center;">P6</th>
                                    <th style="text-align: center;">P7</th>
                                    <th style="text-align: center;">P7</th>
                                    <th style="text-align: center;">P9</th>
                                    <th style="text-align: center;">P10</th>
                                    <th style="text-align: center;">P11</th>
                                    <th style="text-align: center;">P12</th>
                                    <th style="text-align: center;">P13</th>
                                    <th style="text-align: center;">P14</th>
                                </tr>
                            </thead>
                        <tbody ></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
          function updateData() {
            const matkul = [];
            let nomor = 1;
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: 'https://layar.yarsi.ac.id/webservice/rest/server.php?wstoken=463cfb78c5acc92fbed0656c2aec27b4&wsfunction=core_course_get_courses&moodlewsrestformat=json',
                cache: true,

                success: function (data, status, xhr) {
                    for (let i = 0; i < data.length; i++) {
                        if (data[i]['categoryid'] == 447 || data[i]['categoryid'] == 392 || data[i]['categoryid'] == 328) {
                            const namaMatkul = data[i]['fullname'];
                            matkul.push({
                                nomor: nomor++,
                                matakuliah: namaMatkul
                            });
                        }
                    }

                    const table = $('#data-matkul').DataTable({
                        destroy: true,
                        processing: true,
                        data: matkul,
                        columns: [
                            { title: 'No', data: 'nomor' },
                            { title: 'Nama Mata Kuliah', data: 'matakuliah' },
                            { title: 'Tugas', data: null},
                            { title: 'Kuis', data: null},
                            { title: 'P1', data: null},
                            { title: 'P2', data: null},
                            { title: 'P3', data: null},
                            { title: 'P4', data: null},
                            { title: 'P5', data: null},
                            { title: 'P6', data: null},
                            { title: 'P7', data: null},
                            { title: 'P8', data: null},
                            { title: 'P9', data: null},
                            { title: 'P10', data: null},
                            { title: 'P11', data: null},
                            { title: 'P12', data: null},
                            { title: 'P13', data: null},
                            { title: 'P14', data: null,
                                render: function (data, type, row) {
                                    return '';
                                }
                            },
                        ],
                    });

                }
            });
        }
        $(document).ready(function() {
            const table = $('#data-matkul').DataTable();
            updateData();
        });
        </script>
@endsection