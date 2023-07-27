<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // mendapatkan data fakultas
        $fakultas = Fakultas::all();

        // mendapatkan data prodi
        $prodi = Prodi::with('fakultas')->get();

        $categoryId = $request->query('categoryid');
        $unitID = $request->query('unitID');

        $data = [
            'categoryId' => $categoryId,
            'unitID' => $unitID,
        ];

        if (!session('id_role')) {
            return redirect('forbidden');
        }

        // semester menuju halaman daftar mata kuliah pasca-kenotariatan
        if ($data['unitID'] == 1) {
            return view('dashboard.semester.pascasarjana.magister_kenotariatan.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 209) {
            return view('dashboard.semester.pascasarjana.magister_kenotariatan.2020_2021_genap');
        } else if ($data['categoryId'] == 210) {
            return view('dashboard.semester.pascasarjana.magister_kenotariatan.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 269) {
            return view('dashboard.semester.pascasarjana.magister_kenotariatan.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 346) {
            return view('dashboard.semester.pascasarjana.magister_kenotariatan.2021_2022_genap', $data);
        } else if ($data['categoryId'] == 433) {
            return view('dashboard.semester.pascasarjana.magister_kenotariatan.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 533) {
            return view('dashboard.semester.pascasarjana.magister_kenotariatan.2022_2023_genap', $data);

            // semester menuju halaman daftar mata kuliah pasca-manajemen
        } else if ($data['unitID'] == 2) {
            return view('dashboard.semester.pascasarjana.magister_manajemen.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 159) {
            return view('dashboard.semester.pascasarjana.magister_manajemen.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 204) {
            return view('dashboard.semester.pascasarjana.magister_manajemen.2020_2021_genap', $data);
        } else if ($data['categoryId'] == 268) {
            return view('dashboard.semester.pascasarjana.magister_manajemen.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 394) {
            return view('dashboard.semester.pascasarjana.magister_manajemen.2021_2022_genap', $data);
        } else if ($data['categoryId'] == 434) {
            return view('dashboard.semester.pascasarjana.magister_manajemen.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 532) {
            return view('dashboard.semester.pascasarjana.magister_manajemen.2022_2023_genap', $data);

            // semester menuju halaman daftar mata kuliah pasca-sainsBiomedis
        } else if ($data['unitID'] == 3) {
            return view('dashboard.semester.pascasarjana.magister_sainsBiomedis.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 167) {
            return view('dashboard.semester.pascasarjana.magister_sainsBiomedis.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 329) {
            return view('dashboard.semester.pascasarjana.magister_sainsBiomedis.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 453) {
            return view('dashboard.semester.pascasarjana.magister_sainsBiomedis.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 537) {
            return view('dashboard.semester.pascasarjana.magister_sainsBiomedis.2022_2023_genap', $data);

            // semester menuju halaman daftar mata kuliah pascasarjana-adminRS
        } else if ($data['unitID'] == 4) {
            return view('dashboard.semester.pascasarjana.magister_adminRS.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 536) {
            return view('dashboard.semester.pascasarjana.magister_adminRS.2022_2023_genap', $data);

            // semester menuju halaman daftar mata kuliah pasca-doktor-sainsBiomedis    
        } else if ($data['unitID'] == 5) {
            return view('dashboard.semester.pascasarjana.doktor_sainsBiomedis.semester', $data);
        } else if ($data['categoryId'] == 535) {
            return view('dashboard.semester.pascasarjana.doktor_sainsBiomedis.2022_2023_genap', $data);

            // semester menuju halaman daftar mata kuliah fti-ti
        } else if ($data['unitID'] == 10) {
            return view('dashboard.semester.fti.ti.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 16) {
            return view('dashboard.semester.fti.ti.2019_2020_ganjil', $data);
        } else if ($data['categoryId'] == 39) {
            return view('dashboard.semester.fti.ti.2019_2020_genap', $data);
        } else if ($data['categoryId'] == 64) {
            return view('dashboard.semester.fti.ti.2019_2020_antara', $data);
        } else if ($data['categoryId'] == 157) {
            return view('dashboard.semester.fti.ti.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 206) {
            return view('dashboard.semester.fti.ti.2020_2021_genap', $data);
        } else if ($data['categoryId'] == 238) {
            return view('dashboard.semester.fti.ti.2020_2021_antara', $data);
        } else if ($data['categoryId'] == 240) {
            return view('dashboard.semester.fti.ti.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 358) {
            return view('dashboard.semester.fti.ti.2021_2022_genap', $data);
        } else if ($data['categoryId'] == 403) {
            return view('dashboard.semester.fti.ti.2021_2022_antara', $data);
        } else if ($data['categoryId'] == 435) {
            return view('dashboard.semester.fti.ti.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 503) {
            return view('dashboard.semester.fti.ti.2022_2023_genap', $data);

            // semester menuju halaman daftar mata kuliah fti-ip
        } else if ($data['unitID'] == 11) {
            return view('dashboard.semester.fti.ip.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 17) {
            return view('dashboard.semester.fti.ip.2019_2020_ganjil', $data);
        } else if ($data['categoryId'] == 40) {
            return view('dashboard.semester.fti.ip.2019_2020_genap', $data);
        } else if ($data['categoryId'] == 156) {
            return view('dashboard.semester.fti.ip.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 207) {
            return view('dashboard.semester.fti.ip.2020_2021_genap', $data);
        } else if ($data['categoryId'] == 239) {
            return view('dashboard.semester.fti.ip.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 359) {
            return view('dashboard.semester.fti.ip.2021_2022_genap', $data);
        } else if ($data['categoryId'] == 439) {
            return view('dashboard.semester.fti.ip.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 488) {
            return view('dashboard.semester.fti.ip.2022_2023_genap', $data);

            // semester menuju halaman daftar mata kuliah feb-manajemen 
        } else if ($data['unitID'] == 12) {
            return view('dashboard.semester.feb.manajemen.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 8) {
            return view('dashboard.semester.feb.manajemen.2019_2020_ganjil', $data);
        } else if ($data['categoryId'] == 32) {
            return view('dashboard.semester.feb.manajemen.2019_2020_genap', $data);
        } else if ($data['categoryId'] == 66) {
            return view('dashboard.semester.feb.manajemen.2019_2020_antara', $data);
        } else if ($data['categoryId'] == 131) {
            return view('dashboard.semester.feb.manajemen.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 185) {
            return view('dashboard.semester.feb.manajemen.2020_2021_genap', $data);
        } else if ($data['categoryId'] == 248) {
            return view('dashboard.semester.feb.manajemen.2020_2021_antara', $data);
        } else if ($data['categoryId'] == 278) {
            return view('dashboard.semester.feb.manajemen.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 360) {
            return view('dashboard.semester.feb.manajemen.2021_2022_genap', $data);
        } else if ($data['categoryId'] == 404) {
            return view('dashboard.semester.feb.manajemen.2021_2022_antara', $data);
        } else if ($data['categoryId'] == 443) {
            return view('dashboard.semester.feb.manajemen.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 493) {
            return view('dashboard.semester.feb.manajemen.2022_2023_genap', $data);
        } else if ($data['categoryId'] == 550) {
            return view('dashboard.semester.feb.manajemen.2022_2023_antara', $data);

            // semester menuju halaman daftar mata kuliah feb-akuntansi   
        } else if ($data['unitID'] == 13) {
            return view('dashboard.semester.feb.akuntansi.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 7) {
            return view('dashboard.semester.feb.akuntansi.2019_2020_ganjil', $data);
        } else if ($data['categoryId'] == 33) {
            return view('dashboard.semester.feb.akuntansi.2019_2020_genap', $data);
        } else if ($data['categoryId'] == 67) {
            return view('dashboard.semester.feb.akuntansi.2019_2020_antara', $data);
        } else if ($data['categoryId'] == 130) {
            return view('dashboard.semester.feb.akuntansi.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 193) {
            return view('dashboard.semester.feb.akuntansi.2020_2021_genap', $data);
        } else if ($data['categoryId'] == 420) {
            return view('dashboard.semester.feb.akuntansi.2021_2022_antara', $data);
        } else if ($data['categoryId'] == 277) {
            return view('dashboard.semester.feb.akuntansi.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 371) {
            return view('dashboard.semester.feb.akuntansi.2021_2022_genap', $data);
        } else if ($data['categoryId'] == 448) {
            return view('dashboard.semester.feb.akuntansi.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 508) {
            return view('dashboard.semester.feb.akuntansi.2022_2023_genap', $data);
        } else if ($data['categoryId'] == 562) {
            return view('dashboard.semester.feb.akuntansi.2022_2023_antara', $data);

            // semester menuju halaman daftar mata kuliah fh-hukum 
        } else if ($data['unitID'] == 14) {
            return view('dashboard.semester.fh.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 11) {
            return view('dashboard.semester.fh.2019_2020_ganjil', $data);
        } else if ($data['categoryId'] == 34) {
            return view('dashboard.semester.fh.2019_2020_genap', $data);
        } else if ($data['categoryId'] == 154) {
            return view('dashboard.semester.fh.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 176) {
            return view('dashboard.semester.fh.2020_2021_genap', $data);
        } else if ($data['categoryId'] == 246) {
            return view('dashboard.semester.fh.2020_2021_antara', $data);
        } else if ($data['categoryId'] == 344) {
            return view('dashboard.semester.fh.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 349) {
            return view('dashboard.semester.fh.2021_2022_genap', $data);
        } else if ($data['categoryId'] == 419) {
            return view('dashboard.semester.fh.2021_2022_antara', $data);
        } else if ($data['categoryId'] == 428) {
            return view('dashboard.semester.fh.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 498) {
            return view('dashboard.semester.fh.2022_2023_genap', $data);
        } else if ($data['categoryId'] == 567) {
            return view('dashboard.semester.fh.2022_2023_antara', $data);

            // semester menuju halaman daftar mata kuliah fpsi
        } else if ($data['unitID'] == 15) {
            return view('dashboard.semester.fpsi.semester', compact('fakultas', 'prodi'));
        } else if ($data['categoryId'] == 13) {
            return view('dashboard.semester.fpsi.2019_2020_ganjil', $data);
        } else if ($data['categoryId'] == 36) {
            return view('dashboard.semester.fpsi.2019_2020_genap', $data);
        } else if ($data['categoryId'] == 68) {
            return view('dashboard.semester.fpsi.2020_2021_ganjil', $data);
        } else if ($data['categoryId'] == 184) {
            return view('dashboard.semester.fpsi.2020_2021_genap', $data);
        } else if ($data['categoryId'] == 265) {
            return view('dashboard.semester.fpsi.2021_2022_ganjil', $data);
        } else if ($data['categoryId'] == 357) {
            return view('dashboard.semester.fpsi.2021_2022_genap', $data);
        } else if ($data['categoryId'] == 427) {
            return view('dashboard.semester.fpsi.2022_2023_ganjil', $data);
        } else if ($data['categoryId'] == 489) {
            return view('dashboard.semester.fpsi.2022_2023_genap', $data);
        }

        return view('dashboard.matkul', compact('fakultas', 'prodi'));
    }
}
