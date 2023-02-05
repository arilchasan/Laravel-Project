<?php

namespace App\Http\Controllers;

use App\Models\Gerbong;
use App\Models\PenumpangModels;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', ); 
    }

    public function p()
    {
        return view('dashboard.p', [ "daftar_penumpang" => PenumpangModels::all() ]); 
    }
    public function t()
    {
        return view('dashboard.t', [
            "data_tujuan" => Tujuan::all(),           
        ]); 
    }
    public function g()
    {
        return view('dashboard.g', [
            "data" => Gerbong::all(),           
        ]); 
    }
    
    
}
