<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian as a;

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
}
