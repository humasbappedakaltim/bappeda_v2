<?php

namespace App\Http\Controllers;

use App\Models\Pio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'required|email|max:255',
            'akta_kelahiran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'telp' => 'required|string|max:20',
            'faksimili' => 'nullable|string|max:20',
            'alamat' => 'required|string|max:1000',
            'rincian' => 'required|string|max:2000',
            'jenis' => 'required|string|max:100',
            'tujuan_penggunaan' => 'required|string|max:2000',
        ]);




        $file_name_ktp = null;
        $file_name_akta = null;

        if ($request->hasFile('ktp')) {
            $file = $request->file('ktp');

            if (!in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/jpg'])) {
                return back()->withErrors(['ktp' => 'The uploaded file must be a valid image.']);
            }

            $upload_path = public_path('storage/docs-pio/ktp/');
            $file_name_ktp = 'Ktp_' . Str::slug($request->name) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name_ktp);
        }

        if ($request->hasFile('akta_kelahiran')) {
            $file = $request->file('akta_kelahiran');

            if (!in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/jpg'])) {
                return back()->withErrors(['akta_kelahiran' => 'The uploaded file must be a valid image.']);
            }

            $upload_path = public_path('storage/docs-pio/akta/');
            $file_name_akta = 'Akta_' . Str::slug($request->name) . '_' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

            $file->move($upload_path, $file_name_akta);
        }


        $pio = Pio::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'ktp' => $file_name_ktp,
            'email' => $request->email,
            'akta_kelahiran' => $file_name_akta,
            'telp' => $request->telp,
            'faksimili' => $request->faksimili ?? null,
            'alamat' => $request->alamat,
            'rincian' => $request->rincian,
            'tujuan_penggunaan' => $request->tujuan_penggunaan,
            'jenis' => $request->jenis,
        ]);

        if($pio){
            return redirect()->back()->with('success', 'Data Permohonan Berhasil DiAjukan');
        } else {
            return redirect()->back()->withInput($pio);
        }

    }

}
