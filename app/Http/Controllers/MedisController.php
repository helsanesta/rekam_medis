<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedisController extends Controller
{
    public function riwayat() {
        return view('rekammedis', [
            "title" => "Riwayat Rekam Medis Keseluruhan"
        ]);
    }

    // public function pasien() {
    //     return view('pasien', [
    //         "title" => "Daftar Pasien"
    //     ]);
    // }

    // public function dokter() {
    //     return view('dokter', [
    //         "title" => "Daftar Dokter"
    //     ]);
    // }
}
