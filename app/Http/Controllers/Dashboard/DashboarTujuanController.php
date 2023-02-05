<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class DashboarTujuanController extends Controller
{
    public function show(Tujuan $tujuan)
    {
        return view('dashboard.tujuan.detail',[
            "tujuan" => $tujuan
        ]);
    }
}
