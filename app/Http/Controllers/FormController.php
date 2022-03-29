<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Alert;

class FormController extends Controller
{
    public function input()
    {
        return view('form');
    }
 
    public function proses(Request $request)
    {
        Alert::success('Submit Berhasil!', 'Terima kasih sudah mengisi Form Rekam Medis!');
        $this->validate($request,[
            'pasien' => ['required', 'min:3', 'max:20'],
            'dokter' => ['required','min:3','max:20'],
            'kondisi' => ['required', 'min:6','max:100'],
            'suhu' => ['required', 'numeric', 'min:35', 'max:45.5'],
            'resep' => ['required', 'image', 'max:2048', 'mimes:pdf,jpg,jpeg,png']
       ]);
        $foto_link = $this->saveFoto( $request, 1 );
        $request->resep = $foto_link;
        return view('rekammedis',['data' => $request]);
    }

    public function saveFoto(Request $request, $id)
    {
        $foto = $request->resep; 
        $foto_name = ''; 
        if ($foto !== NULL) {
            $foto_name = 'foto'. $id . "." . $foto->extension();
            $foto_name = str_replace(' ', '-', strtolower($foto_name)); 
            $foto->storeAs(null, $foto_name, ['disk' => 'public']); 
        }
        return asset('storage') . '/' . $foto_name; 
    }
}