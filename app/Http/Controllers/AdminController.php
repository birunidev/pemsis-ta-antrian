<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian as a;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======

>>>>>>> 6b6cf095fc8d4efa2d60d135d88d9b42aa4d9437
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function indexTeller()
    {
        $dataantrian = a::all();
        return view('admin.teller.index', ['dataantrian' => $dataantrian]);
    }

    public function create()
    {
        return view('admin.teller.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_teller' => 'required',
            'nomer_teller' => 'required',
            'total_antrian' => 'required'
        ]);

        a::create([
            'id_antrian' => $request->id_teller,
            'nomer_teller' => $request->nomer_teller,
            'total_antrian' => $request->total_antrian
        ]);

        return redirect('/dashboard');
    }
<<<<<<< HEAD

    public function edit($id)
    {
        $dataantrian = DB::table('antrians')->where('id_antrian',$id)->first();
        return view('admin.teller.edit', ['dataantrian' => $dataantrian]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id_teller' => 'required',
            'nomer_teller' => 'required',
            'total_antrian' => 'required'
        ]);

        a::where('id_antrian', $request->id_teller)->update([
                'nomer_teller' => $request->nomer_teller,
                'total_antrian' => $request->total_antrian
        ]);

        return redirect('/dashboard');
    }

    public function delete($id)
    {
        DB::table('antrians')->where('id_antrian', $id)->delete();
        return redirect('/dashboard');
    }
}
=======
}
>>>>>>> 6b6cf095fc8d4efa2d60d135d88d9b42aa4d9437
