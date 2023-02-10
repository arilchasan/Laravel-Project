<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Gerbongs;
use App\Models\Gerbong as ModelsGerbongs;
use App\Models\User;
use Illuminate\Http\Request;


class Gerbong extends Controller
{
    public function index()
    {
  
        return view('gerbong.about',[
            "data" => ModelsGerbongs::paginate(3)
        ]); 
    }
    public function show(ModelsGerbongs $gerbong)
    {
        
        return view('gerbong.detail',[
            "gerbong" => $gerbong
        ]);
    }
}
