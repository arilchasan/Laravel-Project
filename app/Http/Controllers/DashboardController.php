<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\Gerbong;
use App\Models\PenumpangModels;
use App\Models\Tujuan;
use COM;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', ); 
    }

    public function p(Request $request)
    {
        // if($request->has('cari')){
        //     $daftar_penumpang = PenumpangModels::where('nama','LIKE','%'.$request->cari.'%')->paginate(5);
        // }else{
        //     $daftar_penumpang = PenumpangModels::paginate(5);
        // }
       
        // $daftar_penumpang = PenumpangModels::paginate(5);
        // return view('dashboard.p', compact('daftar_penumpang'));
       
    }
    public function t()
    {
        return view('dashboard.t', [
            "data_tujuan" => Tujuan::paginate(2),           
        ]); 
    }
    public function g()
    {
        return view('dashboard.g', [
            "data" => Gerbong::paginate(5),           
        ]); 
    }
    
  
    
}
