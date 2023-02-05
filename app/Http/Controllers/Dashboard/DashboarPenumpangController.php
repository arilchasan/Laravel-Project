<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PenumpangModels;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class DashboarPenumpangController extends Controller
{
    public function index()
    { 
        return view('dashboard.p',[
            "daftar_penumpang" => PenumpangModels::all()
        ]); 
    }
    public function show(PenumpangModels $penumpang)
    {
        // return view('Penumpang.detail',compact('penumpang'));
        return view('dashboard.penumpang.detail',[
            "penumpang" => $penumpang
        ]);
    }
    
    public function create(){
        return view('dashboard.penumpang.create',[
            'tujuan' => Tujuan::all()
        ]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'tujuan_id' => 'required',
            'no_pendaftaran' => 'required',
            'nama' => 'required|max:255',
            'tanggal' => 'required',
            'alamat' => 'required',
        ]);

        PenumpangModels::create($validateData);
        return redirect('/dashboard/p')->with('succes', 'Penumpang baru ditambahkan !');
    }

    public function destroy(PenumpangModels $penumpang){
        PenumpangModels::destroy($penumpang->id);
        return redirect('/dashboard/p')->with('succes','Data berhasil dihapus !');
    }

    public function edit(PenumpangModels $penumpang)
    {
        return view('dashboard.penumpang.edit', [
            "penumpang" => $penumpang,
            "tujuan" => Tujuan::all()
        ]);
    }

    public function update(Request $request, PenumpangModels $penumpang)
    {
        $rules = [
            'tujuan_id' => 'required',
            'no_pendaftaran' => 'disable',
            'nama' => 'required|max:255',
            'tanggal' => 'required',
            'alamat' => 'required',
        ];

         $validateData = $request->validate($rules);

        PenumpangModels::where('id', $penumpang->id)->update($validateData);
        return redirect('/dashboard/p')->with('succes', 'Data Penumpang berhasil diedit !');

        // $penumpang = PenumpangModels::find($penumpang);
        // $penumpang->update($request->except(['submit']));
        // return redirect('/Penumpang/all');
    }
}
