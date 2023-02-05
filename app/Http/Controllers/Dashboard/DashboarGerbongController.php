<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gerbong;
use Illuminate\Http\Request;

class DashboarGerbongController extends Controller
{
    public function show(Gerbong $gerbong)
    {
        
        return view('dashboard.gerbong.detail',[
            "gerbong" => $gerbong
        ]);
    }
}
