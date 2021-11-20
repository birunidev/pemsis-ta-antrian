<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.index',);
    }

    public function indexTeller(){
        return view('admin.teller.index');
    }

    public function create(){
        return view('admin.teller.create');
    }
}
