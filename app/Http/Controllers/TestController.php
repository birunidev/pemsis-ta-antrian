<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian_aktif as af;
use App\Models\Antrian as a;

class TestController extends Controller
{
    public function next(Request $request)
    {
        $data = $request->all();
        $pisah = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $data['antrian_aktif']); // pisah huruf angka
        $hasil = ((int) $pisah[0]  + 1) . $pisah[1]; // tambah angka terus gabung huruf sebelumnya



        af::where('id_antrian', $data['id_antrian'])->update(['antrian_aktif' => $hasil]); // update baru

        return response()->json([
            'status' => 'oke',
            'data' => [
                'id_antrian' => $data['id_antrian'],
                'antrian_aktif' => $hasil
            ]
        ]);
    }

    public function tambah(Request $request)
    {
        $data = $request->all();
        $plus = $data['total_antrian'] + 1;
        $data_to_response = [
            'id_antrian' => $data['id_antrian'],
            'total_antrian' => $plus
        ];

        a::where('id_antrian', $data['id_antrian'])->update(['total_antrian' => $plus]); // update baru

        return response()->json([
            'status' => 'oke',
            'data' => $data_to_response
        ]);
    }
}
