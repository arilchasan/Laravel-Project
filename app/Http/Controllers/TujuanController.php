<?php

namespace App\Http\Controllers;

use App\Models\PenumpangModels;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    //
    public function index()
    {

        
        return view('Tujuan.tampilan',[
            "data_tujuan" => Tujuan::all(),
            
        ]); 
    }
    public function show(Tujuan $tujuan)
    {
        return view('Tujuan.detail',[
            "tujuan" => $tujuan
        ]);
    }
}
