<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function next(Request $request){
        $data = $request->all();

        $data_to_response = [
            'antrian_aktif' => $data['antrian_aktif'] + 1
        ];
        
        // simpen to db
        
        //iki nyoba
        
        return response()->json([
            'status' => 'oke',
            'data' => $data_to_response
        ]);
    }
}