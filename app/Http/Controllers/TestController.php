<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian_aktif as af;
use App\Models\Antrian as a;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function get(){
        $antrians = DB::table('antrians')
            ->join('antrian_aktifs', 'antrians.id_antrian', '=', 'antrian_aktifs.id_antrian')
            ->select('antrian_aktifs.*', 'antrians.*')
            ->get(); 


        return response()->json([
            'status' => 'oke',
            'data' => $antrians
        ]);
    }

    public function next(Request $request)
    {
        $data = $request->all();
        $pisah = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $data['antrian_aktif']); // pisah huruf angka
        $hasil = ((int) $pisah[0]  + 1) . $pisah[1]; // tambah angka terus gabung huruf sebelumnya

        $antrian_aktif = af::where('id_antrian', $data['id_antrian'])->get();
        if(count($antrian_aktif) > 0){
            $antrian_aktif = $antrian_aktif[0];
            $antrian_aktif->fill([
                'antrian_aktif' => $hasil
            ]);
            $antrian_aktif->save();
        }else {
            $antrian_aktif = af::create([
                'id_antrian' => $data['id_antrian'],
                'antrian_aktif' => '1'. $pisah[1],
                'status_antrian' => 'Melayani'
            ]);
        }

        return response()->json([
            'status' => 'oke',
            'data' => $antrian_aktif
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