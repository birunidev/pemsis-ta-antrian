<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function next(Request $request){
        $data = $request->all();

        $data_to_response = [
            'antrian_aktif' => $data['antrian_aktif'] + 1
        ];
<<<<<<< HEAD

        // cari data antrian berdasarkan id
=======
<<<<<<< HEAD
>>>>>>> b4870ad4176c91217428c3e13d32b8f2f29cc9da
        
        // simpen to db
        
        //iki nyoba ---------------------git---------------------
        
=======

        // simpen to db



>>>>>>> d99f2eb4c5127d909c088131bcc2690118d534f8
        return response()->json([
            'status' => 'oke',
            'data' => $data_to_response
        ]);
    }
}
